<?php
$id = $_GET['id'];
try{
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=gerenciamento", "root", "");
}catch(PDOException $e){
    echo "Conexão falho: ".$e->getMessage();
}
$sql = "DELETE FROM usuarios WHERE id=$id";
$results = $conexao->exec($sql);
echo $results."<p>Inserido</p>";
header("Location: index.php");
?>