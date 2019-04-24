<?php
$id = $_GET['id'];
$nome = $_GET['nome'];
$data_nasc = $_GET['data_nasc'];
$salario = $_GET['salario'];
try{
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=gerenciamento", "root", "");
}catch(PDOException $e){
    echo "Conexão falho: ".$e->getMessage();
}
$sql = "UPDATE usuarios SET nome='$nome', data_nascimento='$data_nasc', salario=$salario WHERE id= $id";
$result = $conexao->exec($sql);
echo $result."mudei";
header("Location:index.php");
?>