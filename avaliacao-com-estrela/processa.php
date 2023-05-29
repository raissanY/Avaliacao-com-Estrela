<?php
session_start();
require_once "conexao.php";
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
    header('location:processa.php');
    }else{}
$login=$_SESSION['login'];
$idusu = $_SESSION['idusu'];
$tipo = $_SESSION['tipo'];

echo "Olá $login<br>";

if(!empty($_POST['estrela'])){
	$estrela = $_POST['estrela'];
	$coment = $_POST['comentario'];

if(count($_SESSION['msg']) == true){                  
                        foreach($_SESSION['msg'] as $id => $nome){
                              $sql   = "SELECT *  FROM empresas WHERE idemp= '$id'";
                              $qr    = mysqli_query($con, $sql) or die(mysql_error());
                              $ln    = mysqli_fetch_assoc($qr);
                              $idemp  = $ln['idemp'];
                        }
                     }

	$sql2 = "SELECT * FROM avaliacao WHERE idusu = $idusu and idemp = $idemp";
	$result = $con -> query($sql2);
	if($result -> num_rows > 0){
		echo "Empresa já avaliada. Tente avaliar outra.";
	}else{
		$result_avaliacos = "INSERT INTO avaliacao (idavaliacao,idusu,idemp,nota,comentario) VALUES (null,'$idusu','$idemp','$estrela','$coment')";
	$resultado_avaliacos = mysqli_query($con, $result_avaliacos);
	}
	
	if(mysqli_insert_id($con)){
		$_SESSION['msg'] = "Avaliação cadastrada com sucesso";
			if($tipo == 1){
				header("Location: indexadm.php");
			}else{
				header("Location: indexusu.php");
			}
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar a avaliação. Avaliação já enviada anteriormente. Avalie outra empresa.";
		if($tipo == 1){
			header("Location: indexadm.php");
		}else{
			header("Location: indexusu.php");

	}}
	
}else{
	$_SESSION['msg'] = "Necessário selecionar pelo menos 1 estrela";
	if($tipo == 1){
			header("Location: indexadm.php");
		}else{
			header("Location: indexusu.php");
		}}
?>