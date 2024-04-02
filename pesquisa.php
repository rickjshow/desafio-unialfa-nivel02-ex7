<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container text-center">
    <h2 class="mt-4">Pesquisa</h2>        
    <table class="table table-striped mt-4">
        <thead>
        <tr>
            <th>Região</th>
            <th>Descrição</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
                <?php

                    include "conexao.php";

                    $query = "SELECT * FROM pesquisa";
                    $result = $pdo->prepare($query);
                    $result->execute();
                    $dados = $result->fetchAll(PDO::FETCH_ASSOC);

                    if(isset($dados) && !empty($dados)){

                        foreach($dados as $row) : ?>
                        <tr>
                             <td><?php echo $row['regiao']; ?></td>
                             <td><?php echo $row['descricao']; ?></td>
                             <td><?php echo $row['status']; ?></td>
                        </tr>
                        <?php endforeach;

                   }else{
                        echo "<tr><td colspan='4' class='text-center'>Sem dados para retornar</td></tr>";
                   }
                                      
                ?>     
        </tbody>
    </table>
    </div>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>