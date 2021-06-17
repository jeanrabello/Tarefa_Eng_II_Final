<?php
    require_once 'produto_class.php';

    $produto_1 = new Produto(1, "Redragon Cobra", 20, 250.00, "Mouse");
    $produto_1 -> gerarInfo();

    $produto_2 = new Produto(2, "Fallen Speed", 10, 100.00, "Mousepad");
    $produto_2 -> gerarInfo();

    $produto_3 = new Produto(3, "Hyperx Cloud 2", 30, 550.00, "Headset");
    $produto_3 -> gerarInfo();

    //banco de dados local
    $produtos[0] = $produto_1 -> getInfo();
    $produtos[1] = $produto_2 -> getInfo();
    $produtos[2] = $produto_3 -> getInfo();

    //adicionar
    if (isset($_POST['adicionar'])) {
        $x = count($produtos);

        $cod = $_POST['cod'];
        $nome = $_POST['nome'];
        $quantidade = $_POST['quantidade'];
        $valor = $_POST['valor'];
        $tipo = $_POST['tipo'];

        $produto_novo = new Produto($cod, $nome, $quantidade, $valor, $tipo);
        $produto_novo -> gerarInfo();

        $produtos[$x] = $produto_novo -> getInfo();
    }

    //deletar
    if (isset($_POST['excluir'])) {
        
        $cod = $_POST['cod'];
        $dados = explode(",", $cod);
?>
        <script>
            var cod = "<?php echo $dados[0]; ?>"
            alert('Produto de cod: '+ cod +' foi excluído com sucesso');
        </script>
<?php
        
    }

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

            <div class="gerir">
                <table class="tabela">
                    <tr>
                        <th> Atualizar </th>
                        <th> Cod </th>
                        <th> Nome </th>
                        <th> Quantidade </th>
                        <th> Valor </th>
                        <th> Tipo </th>
                        <th> Excluir </th><br>
                    </tr>
                
        
                    <?php
                        $x = 0;

                        while ($x <= (count($produtos) - 1))
                        {
                    ?>
                            <tr>
                                <td><form method="POST"><button type="submit" value="alterar" name="alterar">Alterar<input type="hidden" value="<?php echo $produtos[$x]['cod']; ?>" name="cod"></form></td>
                                <td><?php echo $produtos[$x]['cod']; ?></td>
                                <td><?php echo $produtos[$x]['nome']; ?></td>
                                <td><?php echo $produtos[$x]['quantidade']; ?></td>
                                <td><?php echo "R$".$produtos[$x]['valor']; ?></td>
                                <td><?php echo $produtos[$x]['tipo']; ?></td>
                                <td><form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>"><button type="submit" value="excluir" name="excluir">Excluir<input type="hidden" value="<?php echo $produtos[$x]['cod'] . "," . $x; ?>" name="cod"></form></td>
                            </tr>
                    <?php
                            $x += 1;
                        }

                        
                    ?>

                </table>

                <button style="margin-left: 48%;"><a href="inserirprodutos.php">Inserir</a></button>

            </div>
        </div>
    </body>
</html>