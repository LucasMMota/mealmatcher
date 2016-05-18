<?php

define('DBHOST', '10.0.132.99');
define('DBPORT', '3306');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'dev_grupocb');
define('DBENCODING', 'utf8');

define('DS', DIRECTORY_SEPARATOR);

define('PATH_ROOT', dirname(dirname(__FILE__)));
define("APP_PATH", PATH_ROOT . DS . 'app');
define("SYSTEM_PATH", PATH_ROOT . DS . 'system');
define('CONTROLLERS', APP_PATH . DS . 'controllers');
define('VIEWS', APP_PATH . DS . 'views');
define('MODELS', APP_PATH . DS . 'models');
define('TEMPLATE', APP_PATH . DS . 'template');
define('HELPERS', SYSTEM_PATH . DS . 'helpers');
define('SMARTYDIR', APP_PATH . DS . 'views');
define('LIBS', SYSTEM_PATH . DS . 'libs');
define('HTTP_ROOT', 'http://' . $_SERVER['HTTP_HOST']);

define('PRODUCAO', 'false');
define('MANUTENCAO', 'false');

define('MAX_NUM_GALERIA', 10);
define('MAX_NUM_DOCUMENTOS', 10);

#define('GOOGLE_API_KEY', 'AIzaSyAv0GeWE8P846wakrPktO8iqoGwAxI67ts');

define('RECAPTCHA_VALID', false);
define('RECAPTCHA_PUBLIC_KEY', '6LcpZ_cSAAAAAOnPSxAoyB-s6xr66pop-NvOcsGz');
define('RECAPTCHA_PRIVATE_KEY', '6LcpZ_cSAAAAAOHMbTHlsvxqHq-fgdJFNrF9_uCN');

/*define('SMTP_HOST', 'smtp.tiviths.corp');
define('SMTP_PORT', 587);
define('SMTP_AUTH', true);
define('SMTP_SECURE', 'ssl');
define('SMTP_HTML', true);
define('SMTP_USERNAME', 'negociosimobiliarios@grupocb.com.br');
define('SMTP_PASSWORD', '');
define('SMTP_EMAIL_FROM_DEFAULT', 'negociosimobiliarios@grupocb.com.br');
define('SMTP_NAME_FROM_DEFAULT', 'Negócios Imobiliários');
define('SMTP_DEBUG', true);
define('SMTP_DEBUG_EMAIL', 'marcelo.miyazaki.ext@tivit.com.br');*/
?>

