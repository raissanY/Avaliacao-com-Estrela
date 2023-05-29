<?php
require_once 'conexao.php';
session_start(); 
$login = $_POST['login'];
$senha = $_POST['senha'];

$result = $con->query("SELECT * FROM usuario WHERE login='$login' AND  senha ='$senha'");
while($row = $result -> fetch_assoc()){ 
$idusu = $row["idusu"];
$tipo = $row["tipo"];
}
 if($tipo == 1){
    $_SESSION['idusu'] = $idusu;
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $_SESSION['tipo'] = $tipo;
header('location:indexadm.php');
 }else{
if(mysqli_num_rows($result) >0){
    $_SESSION['idusu'] = $idusu;
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    $_SESSION['tipo'] = $tipo;
header('location:indexusu.php');
}else{   
       unset ($_SESSION['login']);
       unset ($_SESSION['senha']);
       header('location:login.php');
    }
 }
?>



