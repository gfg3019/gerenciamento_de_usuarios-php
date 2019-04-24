<?php
session_start();
require_once("tela/header.php");
?>
<div class="container">
    <h4>Cadastro de administradores</h4>
        <form action="salvar.php" method="GET">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" class="form-control" name="nome" placeholder="Nome Completo" size="30">
            </div>
            <div class="form-group">
                <label for="data_nasc">Data de nascimento</label>
                <input type="date" id="data_nasc" class="form-control" name="data_nasc" placeholder="Data de nascimento" size="30">
            </div>
            <div class="form-group">
                <label for="salario">salario</label>
                <input type="number" id="salario" class="form-control" name="salario" placeholder="Salario" size="30">
            </div>
            
            <button type="submit" id="btn-novo" class="btn btn-info btn-lg">Salvar</button>
        </form>
</div>
<br><br><br><br>
<?php
require_once("tela/footer.php");
?>