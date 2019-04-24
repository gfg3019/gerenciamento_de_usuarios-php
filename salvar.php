<?php
$name = $_GET['nome'];
$data_nasc = $_GET['data_nasc'];
$salario = $_GET['salario'];
try{
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=gerenciamento", "root", "");
}catch(PDOException $e){
    echo "Conexão falho: ".$e->getMessage();
}
 
$sql = "INSERT INTO usuarios(nome, data_nascimento, salario) VALUES('$name','$data_nasc',$salario)";
$results = $conexao->exec($sql);
echo $results."<p>Inserido</p>";
header("Location: index.php");
?>