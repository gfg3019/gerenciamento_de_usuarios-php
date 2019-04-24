<?php require_once("tela/header.php")?>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>DATA DE NASCIMENTO</th>
                <th>SALARIO</th>
                <th>EDITAR</th>
                <th>EXCLUIR</th>
            </tr>
        </thead>
        <tbody>
           <?php
            try{
                $conexao = new PDO("mysql:host=127.0.0.1;dbname=gerenciamento", "root", "");
            }catch(PDOException $e){
                echo "Conexão falho: ".$e->getMessage();
            }

            $sql =  "SELECT * FROM usuarios";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($results as $rows)
            {
                echo "<tr>";
                echo "<td>".$rows['id']."</td>";
                echo "<td>".$rows['nome']."</td>";
                echo "<td>".$rows['data_nascimento']."</td>";
                echo "<td>".$rows['salario']."</td>";
                echo "<td><a class='btn btn-outline-success' href=update.php?id=".$rows['id'].">Editar</a></td>";
                echo "<td><a class='btn btn-outline-danger' href=excluir.php?id=".$rows['id'].">Excluir</a></td>";
                echo "</tr>";
            }
           ?> 
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>DATA DE NASCIMENTO</th>
                <th>SALARIO</th>
                <th>EDITAR</th>
                <th>EXCLUIR</th>
            </tr>
        </tfoot>
    </table>
    <br><br><br><br>
    <br><br><br><br><br><br>
<?php require_once("tela/footer.php")?>