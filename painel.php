<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Document</title>
</head>
<body style="background-color:#f3f3f3;">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Total Clientes Ano

                </div>
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center; font-size: 40px">
                        <?php
                        
                        include 'conexao/conexao.php';

                        $sql = "SELECT sum(quantidade) total from clientes";
                        $consulta = mysqli_query($conexao,$sql);
                        $dados = mysqli_fetch_array($consulta);
                        echo $dados['total'];

                        ?>

                    <span style="font-size: 10px;">/unid</span>

                    </h5>
                </div>
            </div>

        </div>
        <div class="col-md-4">

        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Faturamento Anual / Ano

                </div>
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center; font-size: 40px">
                        <?php

                        include 'conexao/conexao.php';
                        $sql = 'SELECT sum(valor_venda) as total_venda FROM vendas';
                        $consulta = mysqli_query($conexao,$sql);
                        $dados = mysqli_fetch_array($consulta);
                        $valor = $dados['total_venda'];
                        echo 'R$ ' . number_format($valor,2,'.',''); //concatenação

                        ?>
    
                    <span style="font-size: 10px;">/BRL</span>
                    </h5>
                    
                </div>
         </div>

        </div>
        <div class="col-md-4">

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">Total de Vendas / Ano

                </div>
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center; font-size: 40px">

                    <?php

                    include 'conexao/conexao.php';
                    $sql = 'SELECT sum(quantidade_venda) as total_quantidade FROM vendas';
                    $consulta = mysqli_query($conexao,$sql);
                    $dados = mysqli_fetch_array($consulta);
                    echo $dados['total_quantidade'];

                    
                    ?>
            
                    </h5>
                    
                </div>
         </div>
            
        </div>
    </div>
</div>


    
</body>
</html>