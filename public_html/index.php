<?php
ob_start();
session_start();
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, NULL);
setlocale(LC_ALL, 'pt_BR');

require_once('../app/config.php');

require_once(SYSTEM_PATH . DS . 'system.php');
require_once(SYSTEM_PATH . DS . 'controller.php');
require_once(SYSTEM_PATH . DS . 'model.php');
require_once(LIBS . DS . "smarty/Smarty.class.php");
require_once(LIBS . DS . "debuglib/debuglib.php"); //colecao de funcao para exibir variaveis

/*
require_once(LIBS . DS . "phpmailer/class.phpmailer.php"); //
require_once(LIBS . DS . "canvas/canvas.php");
require_once(LIBS . DS . "UploadHandler/UploadHandler.php");
require_once(LIBS . DS . "recaptcha/recaptchalib.php");
*/
// autoload models, helpers, templates
function autoload($file)
{
    if (file_exists(MODELS . DS . $file . '.php')) {
        require_once(MODELS . DS . $file . '.php');
    } elseif (file_exists(HELPERS . DS . $file . '.php')) {
        require_once(HELPERS . DS . $file . '.php');
    } elseif (file_exists(TEMPLATE . DS . $file . '.php')) {
        require_once(TEMPLATE . DS . $file . '.php');
    } else {
        return true;
    }
}

if (isset($_POST) && !get_magic_quotes_gpc()) {
    foreach ($_POST as $key => $value) {
        if (!is_array($value))
            $_POST[$key] = addslashes($value);
    }
}

spl_autoload_register('autoload');

$start = new System;
$start->run();
?>