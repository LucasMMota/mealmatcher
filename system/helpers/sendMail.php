<?php

/**
 * Classe responsavel pelo envio de e-mails do sistema
 */
class sendMail {

    /**
     * Funcao responsavel pela execucao do envio de email
     * @access public
     * @param array $ArrayEmail Array com os dados para envio da mensagem
     *  - array ['destinatarios'][]['nome']: nome do destinatario
     *  - array ['destinatarios'][]['email']: email do destinatario
     *  - string ['assunto']: assunto da mensagem
     *  - string ['mensagem']: html com a mensagem
     */
    public function send($ArrayEmail) {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->isHTML(true);
        $mail->CharSet = "UTF-8";

        //verifica se esta em teste
        if (SMTP_DEBUG == 'true') {
            $mail->SMTPDebug = 2;
            $mail->Debugoutput = 'html';
            $mail->addAddress(SMTP_DEBUG_EMAIL, 'Email de teste');
        } else {
            foreach ($ArrayEmail['destinatarios'] as $value) {
                $mail->addAddress($value['email'], $value['email']);
            }
        }

        //definindo valores
        if (SMTP_AUTH == 'true') {
            $mail->Port = SMTP_PORT;
            $mail->SMTPSecure = SMTP_SECURE;
            $mail->SMTPAuth = SMTP_AUTH;
            $mail->Username = SMTP_USERNAME;
            $mail->Password = SMTP_PASSWORD;
        }
        $mail->Host = SMTP_HOST;
        $mail->setFrom(SMTP_EMAIL_FROM_DEFAULT, SMTP_NAME_FROM_DEFAULT);

        $mail->Subject = $ArrayEmail['assunto'];
        $mail->msgHTML($ArrayEmail['mensagem']);

        if (!$mail->send()) {
            return $mail->ErrorInfo;
        } else {
            return true;
        }

        $mail->ClearAllRecipients();
        $mail->ClearAttachments();
    }

}
