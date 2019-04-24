<?php
require_once("tela/header.php");

$id = $_GET['id'];

try{
    $conexao = new PDO("mysql:host=127.0.0.1;dbname=gerenciamento", "root", "");
}catch(PDOException $e){
    echo "Conexão falho: ".$e->getMessage();
}

$sql =  "SELECT * FROM usuarios WHERE id=$id";
foreach ($conexao->query($sql) as $rows)
{
    echo"<div class='container'>";
    echo "<form action='salvar_update.php' method='GET'>";
    echo"<input type='hidden' name='id' value='$id'>";
    echo '<div class="form-group">';
    echo "<label for='nome'>Nome</label>";
    echo "<input type='text' id='nome' name='nome' class='form-control placeholder='' value='".$rows['nome']."'>";
    echo '</div>';

    echo '<div class="form-group">';
    echo "<label for='data_nasc'>Data de nascimento</label>";
    echo "<input type='date' id='data_nasc' name='data_nasc' class='form-control' value='".$rows['data_nascimento']."'>";
    echo '</div>';

    echo '<div class="form-group">';
    echo "<label for='salario'>Salario</label>";
    echo "<input type='number' id='salario' class='form-control' name='salario'  value='".$rows['salario']."'>";
    echo '</div>';
    echo"<button type='submit' class='btn btn-success'>Salvar</button>";
    echo "</form>";
    echo"</div>";
    echo"<br><br><br><br><br>";
}

require_once("tela/footer.php");
?>