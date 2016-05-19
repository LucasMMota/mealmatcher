<?php
session_start();
//session_destroy();
#destroi - mantem apenas as sugestoes na sessao
unset($_SESSION['usu']);
unset($_SESSION['logado']);
header('Location: index.php');