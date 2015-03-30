<?php
/**
 * @name VUsuario
 * @desc Página de manutenção de usuário
 * @since 2015-02-13
 */
$page_title = 'Inicio > Manutenção > Usuário';
include_once "header.php";

if ($_REQUEST)
{
    $login = $_REQUEST['username'];
    $pass = $_REQUEST['password'];
}





include_once "footer.php";
?>