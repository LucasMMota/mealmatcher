# mealmatcher

apontar para /public_html

estrutura:
app
    controllers
    models - arquivos para conexão com banco (p cada entidade)
    template - definições de layout admin e default.
             - template.php definição do layout, estrutura e imports de css e js

    views -
        templates - arquivos de visualização/html
                    os arquivos estão na extenção tpl, do Smarty, um plugin PHP que utilizo para view que ajudar muito
    config.php - configurações gerais e banco

public_html
    files - arquivos públicos, essa estrutura pode ser como quiser

    index.php - arquivo inicial do sistema.

system - core do framework
