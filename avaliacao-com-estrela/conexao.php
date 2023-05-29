<?php
	$localhost = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "avaliacao";
	
	//Criar a conexao
$con = new mysqli($localhost,$user,$pass,$dbname) or die ("erro");