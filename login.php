<?php
/**
 * Created by PhpStorm.
 * User: manuelernesto
 * Date: 2/15/16
 * Time: 8:12 PM
 */

require 'config/config.php';

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);
$tipo = $_POST['tipo'];
$erro = '';

if ($email):
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
else:
    $erro = 'E-mail invalido';

endif;

if (empty($erro)):


    $login = new libraries_Classes_Login();
    $logar = $login->logar($tipo, $_POST[$email], $_POST[$senha]);

else:

    echo $erro;

endif;