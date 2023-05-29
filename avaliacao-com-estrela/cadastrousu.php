<!DOCTYPE html>
<html>
<head>
<title>ADICIONAR USUARIO</title>
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
</head>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastre-se</title>
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
              <a href="indexusu.php"><br><li>Home</li></a>
                <a href="sair.php"><br><li>Sair</li></a>
            </ul>
        </nav>
    </header>
<legend>Cadastre-se</legend>
<form action="php_action/cadastrousu.php" method="post" class = "form-group">
<table cellspacing="0" cellpadding="0">
<tr>
<th>Login de Usuário</th><tr>
<td><input class = "form-control" type="text"
name="login" placeholder="login"></td></tr>
<th>Senha</th><tr>
<td><input class = "form-control" type="password"
name="senha" placeholder="Senha"></td></tr>
<th>Nome</th><tr>
<td><input class = "form-control" type="text"
name="nome" placeholder="Nome Completo"></td></tr>
<th>Telefone</th><tr>
<td><input class = "form-control" type="number"
name="telefone" placeholder="telefone"></td></tr>
</table>
<button type="submit" class = "btn btn-danger">Salvar Dados</button>
<a href="login.php"><button type="button" class = "btn btn-danger">Voltar</button></a>

</form>
</body>
</html>