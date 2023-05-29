<?php require_once 'conexao.php';?>
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
                <a href="relatorio2.php"><br><li>Empresas</li></a>
				<a href="cadastroemp.php"><br><li>Cadastrar empresa</li></a>
                <a href="sair.php"><br><li>Sair</li></a>
            </ul>
        </nav>
    </header>
		<h1>Avalie</h1>
		<?php require_once 'conexao.php';
		session_start();
$login=$_SESSION['login'];
$tipo = $_SESSION['tipo'];
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
        
        }

echo "<h3>Olá Administrador $login</h3>";
if((!isset ($_SESSION['login']) == true) AND (!isset ($_SESSION['senha']) == true) AND $tipo == 1){
        header('location:indexadm.php');
    }else if($tipo != 1){
        header('location:index.php');
    }
?>
        <h4>Empresas Disponíveis para Avaliação</h4>
        <a href="relatorio1.php"><button type="button" class="btn btn-info">Verificar Médias das empresas</button></a>
<div class="tabelaemp">
<table class = "table table-bordered">
<thead>
<tr>
<th>Empresa</th>
<th>Ramo de Atuação</th>
<th>Cidade</th>
<th>UF</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT * FROM empresas";
$result = $con -> query($sql); 
if($result -> num_rows > 0){ 
while($row = $result -> fetch_assoc()){ 
echo "<tr>
<td>".$row["nome"]."</td> 
<td>".$row["ramo"]."</td>
<td>".$row["cidade"]."</td>
<td>".$row["uf"]."</td>
</tr><td><a href=site.php?id=".$row['idemp']."&acao=incluir><button type='button' class = 'btn btn-info'>Avaliar</button></a><br></td>";
}
}else{
echo "<tr><td colspan='5'><center>Sem Dados a 
apresentar</center></td></tr>";
}

?>
</tbody>
</table>
</div>
		<?php
		$con -> close();
		?>
	</body>
</html>