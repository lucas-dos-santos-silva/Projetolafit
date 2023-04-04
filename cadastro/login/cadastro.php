<?php 
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$connect = mysqli_connect('localhost','root','',"cadastro");

$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

    if($login == "" || $login == null){
        echo "<script language='javascript' type='text/javascript'>
        alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
    }else{
        if($logarray == $login){
            echo "<script language='javascript' type= 'text/javascript'>
            alert ('esse login já existe');window.location.href='cadastro.html';</script>";
            die();
        }else{
            $query ="INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
            $insert = mysqli_query($connect, $query);
            if($insert){
                echo "<script language='javascript' type='text/javascript'>
                alert('usuario cadastrado com sucesso');window.location.href='cadastro.html'</script>";
            }else{
                echo "<script language='javascript' type='text/javascript'>
                alert('nao foi possivel cadastrrar esse usuario');window.locatiion.href='cadastro.html'</script>";
            }
        }
    }

?>