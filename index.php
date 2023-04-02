<?php 
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('nome_servidor','usuario','senha');
$db = mysql_select_db('nome_do_banco');
$query_select = "SELECT login FROM usuarios WHERE login ='$login'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['login'];

    if($login ="" || $login ==null){
        echo "<script language='javascript' type='text/javascript'>
        alert('O campo login deve ser preenchido');window.location.href='index.html';</script>";
    }else{
        if($logarray == $login){
            echo "<script language='javascript' type= 'text/javascript'>
            alert ('esse login já existe');window.location.href='index.html';</script>";
            die();
        }else{
            $query ="INSET INTO usuarios (login,senha) VALUES('$login,$senha')";
            $insert = mysql_query($query,$connect);
            if($insert){
                echo "<script language='javascript' type='text/javascript'>
                alert('usuario cadastrado com sucesso');window.location.href='index.html'</script>";
            }else{
                echo "<script language='javascript' type='text/javascript'>
                alert('nao foi possivel cadastrrar esse usuario');window.locatiion.href='index.html'</script>";
            }
        }
    }

?>