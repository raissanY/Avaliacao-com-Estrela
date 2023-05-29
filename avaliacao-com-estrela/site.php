<?php require_once 'conexao.php';
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
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
                <?php
                $sql = "SELECT * FROM usuario";
                $result = $con -> query($sql);
                if($result->num_rows > 0){
                while($row = $result -> fetch_assoc()){
                    $tipo = $row['tipo'];
                }
                    if($tipo == 1){
                        echo "<a href='indexadm.php'><br><li>Home</li></a>";
                    }else if($tipo == 0){
                        echo "<a href='indexusu.php'><br><li>Home</li></a>";
                    }}?>
                <a href="sair.php"><br><li>Sair</li></a>
            </ul>
        </nav>
    </header>
		<h1>Avalie</h1>
		<?php require_once 'conexao.php';
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg']."<br><br>";
			unset($_SESSION['msg']);
		}

        if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
    header('location:site.php');
    }else{}
 if(isset($_SESSION['msg'])){
         $_SESSION['msg'] = array();
      }
if(isset($_GET['acao'])){
         //ADICIONAR CARRINHO
         if($_GET['acao'] == 'incluir'){
            $id = intval($_GET['id']);
            if(!isset($_SESSION['msg'][$id])){
               $_SESSION['msg'][$id] = 1;
            }else{
               $_SESSION['msg'][$id] += 1;
            }
                }     
                
               if(($_SESSION['msg']) == true){
                        foreach($_SESSION['msg'] as $id => $nome){
                              $sql   = "SELECT *  FROM empresas WHERE idemp= '$id'";
                              $qr    = mysqli_query($con, $sql) or die(mysql_error());
                              $ln    = mysqli_fetch_assoc($qr);
                              $nome  = $ln['nome'];
                           echo 'Empresa a Avaliar: '.$nome;
                    if($tipo == 1){
                        echo "<br><br><a href='indexadm.php'><button type='button'>Avaliar Outra Empresa</button></a><br><br>";
                    }else{
                        echo "<br><br><a href='indexusu.php'><button type='button'>Avaliar Outra Empresa</button></a><br><br>";
                    }                           
                        }
                     }}
?>

		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

                Comentário: <input type="text" name="comentario"><br>
				
				<br><input type="submit" value="Cadastrar">
				
			</div>
		</form>
	</body>
</html>


