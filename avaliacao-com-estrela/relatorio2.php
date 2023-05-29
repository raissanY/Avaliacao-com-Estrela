<!DOCTYPE html>
<html>
<head>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min
.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundl
e.min.js" integrity="sha384-
gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
		<meta charset="utf-8">
		<title>Celke - Reputacao com estrela</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="estilo.css">
	</head>
	<style>
        *{
            margin:0;
            padding:0;
        }a{
            color:black;
            text-decoration:none;
            transition:0.3s;
        }a:hover{
            opacity:0.7;
        }.logo{
            font-size:24px;
            text-transform:uppercase;
            letter-spacing: 4px;
        }
        nav{
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-family: system-ui,-apple-system, helvetica,arial,sans-serif;
            background: #00FA9A;
        }body{
            font-family:Arial,sans-serif;
            background: no-repeat
            center center;
            background-size: cover;
            height: 90vh;
        }.nav-list{
            list-style:none;
            display: flex;
        }.nav-list li{
            letter-spacing: 6px;
            margin-left: 32px;
        }li{
            text-transform:uppercase;
            color:black;
            transition:0.3s;
            letter-spacing: 6px;
        }li:hover{
            opacity:0.9;
    }.tela{
      position:absolute;
    }
    </style>

<body>
    <header>
        <nav>
            <a class="logo" href="">AVALIAÇÕES</a>
            <ul class="nav-list">
                <a href="indexadm.php"><br><li>Home</li></a>
				<a href="cadastroemp.php"><br><li>Cadastre sua empresa</li></a>
                <a href="relatorio1.php"><br><li>Médias das empresas</li></a>
                <a href="sair.php"><br><li>Sair</li></a>
            </ul>
        </nav>
    </header>
<?php
require_once "conexao.php";
session_start();
$tipo = $_SESSION['tipo'];
if((!isset ($_SESSION['login']) == true) AND (!isset ($_SESSION['senha']) == true) AND $tipo == 1){
        header('location:indexadm.php');
    }else if($tipo != 1){
        header('location:index.php');
    }
if ($con->connect_error) {
    die("Erro de conexão: " . $con->connect_error);
}
?>
<html>
<h1>Avaliações por empresa</h1>
<table class = "table table-bordered">
<form method = "POST">
    Empresas <select name = 'idava'>
        <?php
        $sql = "SELECT * FROM empresas";
        $result = $con -> query($sql);
        if($result -> num_rows){
        while($row = $result -> fetch_assoc()){
            echo "<option value = " . $row['idemp'].">".$row['nome']."</option>";
        }
        }
        ?>
        </select>
        <button type="submit" class = "btn btn-alert">Pesquisar</button>

<table class = "table table-bordered">
<thead>
<tr>
<th>Nome</th>
<th>Autor</th>
<th>Nota</th>
<th>Comentário</th>
</tr>
    </div>
<?php
@$idava = $_POST['idava'];
if($idava == 0){
    echo "Selecione uma empresa :)<br><br>";
}else{
$sql = "SELECT emp.nome, usu.login, ava.nota, ava.comentario from empresas as emp, usuario as usu, avaliacao as ava
where emp.idemp=ava.idemp and usu.idusu=ava.idusu and ava.idemp=$idava order by ava.nota desc";
$result = $con -> query($sql);
if($result->num_rows > 0){
while($row = $result -> fetch_assoc()){
  echo "<tr>";
  echo "<td>".$row['nome']."</td>";
  echo "<td>".$row['login']."</td>";
  echo "<td>".$row['nota']."</td>";
    echo "<td>".$row['comentario']."</td>";
  echo "</tr>";
  }
  echo "<button onclick = 'window.print()'>Imprimir a pagina</button><br><br>";
  }else{
  echo "<tr><td colspan='5'><center>Sem Dados a 
  apresentar</center></td></tr>";
}}

?>

<a href="relatorio1.php"><button type="button" class="btn btn-info">Verificar Médias das empresas</button></a>

<br><br>
</html>