
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <style>
    body{
        font-family: arial,sans-serif;
         background-color:white ;
    }button{
        color:black;
        background-color:white;
        font-size:20px;
        border-radius: 10px;
        padding: 15px;
        width: 100%;
        transition:0.3s;
    }button:hover{
        opacity:0.7;
    }.tela{
        top: 20%;
        left: 40%;
        border: 2px solid black;
        position:absolute;
        background-color:#00FA9A;
        padding: 100px;
        border-radius:29px;
        border: none;
    }input{
        padding: 7px;
        border: none;
        border-radius: 6px;
    }h1{
        color:black;
        position:absolute;
        top:14%;
        left:38%
    }label{
        color:black;
    }*{
            margin:0;
            padding:0;
        }a{
            color:black;
            text-decoration:none;
            transition:0.3s;
        }a:hover{
            opacity:0.7;
        }.logo{
            color:black;
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
            height:8vh;
        }.nav-list{
            list-style:none;
            display: flex;
        }.nav-list li{
            letter-spacing: 3px;
            margin-left: 32px;
        }li{
            text-transform:uppercase;
            color:white;
            transition:0.3s;
            letter-spacing: 4px;
        }li:hover{
            opacity:0.7;
        }

</style>
</head>
<body>
<header>
        <nav>
            <legend class="logo">Faça Login</legend>
        <ul class="nav-list">
            <a href="index.php"><li>Home</li></a>
                <a href="cadastrousu.php"><li>Cadastre-se</li></a>
                <a href="login.php"><li>Sair</li></a>
        
    </ul>
        </nav>
    </header>
<div class="tela">

<form method="post" action="ope.php" id="formlogin" name="formlogin">
        <h1>LOGIN</h1>
        <label>LOGIN:</label>
        <input type="text" placeholder="Seu login" name="login" id="login" /><br><br>
        <label>SENHA: </label>
        <input type="password" placeholder="Sua senha" name="senha" id="senha"/><br><br>
        <button type="submit" value="LOGAR">Logar</button> 
</div>
        

</form>
</body>
</html>
