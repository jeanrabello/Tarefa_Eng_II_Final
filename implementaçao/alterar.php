<?php
    require_once 'produto_class.php';

    $x = $_POST['x'];
    $cod = $_POST['cod'];
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];
    $tipo = $_POST['tipo'];
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
                    <h1>Atualizar Produtos</h1><br>
                    <input type="hidden" value="<?php echo $x; ?>" name="x">
                    <label for="cod">Código:</label><br>
                    <input type="number" id="cod" name="cod" value="<?php echo $cod; ?>" placeholder="00001"><br><br>
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" placeholder="Fallen Speed"><br><br>
                    <label for="quantidade" style="margin-left: 5%;">Quantidade:</label><br>
                    <input type="number" id="quantidade" name="quantidade" value="<?php echo $quantidade; ?>" placeholder="20"><br><br>
                    <label for="valor">Valor:</label><br>
                    <input type="number" id="valor" name="valor" value="<?php echo $valor; ?>" placeholder="200.00"><br><br>
                    <label for="tipo">Tipo:</label><br>
                    <input type="text" id="tipo" name="tipo" value="<?php echo $tipo; ?>" placeholder="Mouse"><br><br>
                    <input type="submit" name="alterar" value="Alterar" onclick="confirmacaoAlt()"><br><br>
                    <script>
                        function confirmacaoAlt()
                        {
                             alert('Produto alterado com sucesso');
                        }
                    </script>
                </form>
            </div>
        </div>
    </body>
</html>