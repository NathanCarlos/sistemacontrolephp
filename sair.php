<?php

	//Conexão.
    include_once 'php_action_clientes/db_connect.php';
    setcookie('emailusuario',$_COOKIE['emailusuario'], time()+0);//Armazena o email do usúario no cookie.
    setcookie('nomeusuario',$_COOKIE['nomeusuario'], time()+0);//Armazena o nome do usuário no cookie.
    setcookie('idusuario',$_COOKIE['idusuario'], time()+0);//Armazena o nome do usuário no cookie.

    header('Location: index.php');

?>