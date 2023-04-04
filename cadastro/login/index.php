<?php
    $login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
        echo "Bem-vindo, $login_cookie <br>";
        echo "Essa informacoes <font color='red'>PODEM</font> ser acessadas por voce";
    }else{
        echo "bem vindo, convidado <br>";
        echo "Essas informacoes <font color='red'>NAO PODEM</font> ser acessadas por voce";
        echo "<br><a href='cadastro.html'>faca login</a> para ler o conteudo";
    }
?>