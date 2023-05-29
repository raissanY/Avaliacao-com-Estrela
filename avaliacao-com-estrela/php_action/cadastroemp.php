<?php require_once '../conexao.php';
if($_POST){
    $nome = $_POST['nome'];
    $ramo = $_POST['ramo'];
    $cid = $_POST['cid'];
    $uf = $_POST['uf'];
    $sql = "INSERT INTO empresas (idemp,nome,ramo,cidade,uf) VALUES ('0','$nome','$ramo','$cid','$uf')"; 
if($con -> query($sql) === TRUE){
    echo "<p> Nova empresa cadastrado com sucesso!</p>";
    echo "<a href='../index.php'><button type='button' class ='btn btn-info'>Voltar</button></a>";
}else{
    echo "Erro ".$sql. ' '.$con -> con_error;
}
    $con -> close(); 
}


?>

