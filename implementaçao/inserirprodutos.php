<?php
    require_once 'produto_class.php';

?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" type="text/css" href="./css/main.css">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="imagem/png" href="./Img/logotipo.png" />
        <title>Informarket</title>
    </head>

    <body>
        
        <div class="Principal">
            <div class="cabecalho">
                <?php
                    include 'cabecalhoadmin.php';
                ?>
            </div>

            <div class="esquerda__login" style="margin-left: 26%;">
                <form method="post" action="gerirprodutos.php">
                    <h1>Inserir Produtos</h1><br>
                    <label for="cod">Código:</label><br>
                    <input type="number" id="cod" name="cod" placeholder="00001"><br><br>
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="nome" name="nome" placeholder="Fallen Speed"><br><br>
                    <label for="quantidade" style="margin-left: 5%;">Quantidade:</label><br>
                    <input type="number" id="quantidade" name="quantidade" placeholder="20"><br><br>
                    <label for="valor">Valor:</label><br>
                    <input type="number" id="valor" name="valor" placeholder="200.00"><br><br>
                    <label for="tipo">Tipo:</label><br>
                    <input type="text" id="tipo" name="tipo" placeholder="Mouse"><br><br>
                    <input type="submit" name="adicionar" value="Adicionar" onclick="confirmacaoAdd()"><br><br>
                    <script>
                        function confirmacaoAdd()
                        {
                             alert('Produto adicionado com sucesso');
                        }
                    </script>
                </form>
            </div>
        </div>
    </body>
</html>