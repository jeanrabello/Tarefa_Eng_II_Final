<?php
    //banco de dados local
    $produtos[0] = array("cod" => 1, "nome" => "Redragon Cobra", "quantidade" => 20, "valor" => 250.00, "tipo" => "Mouses");
    $produtos[1] = array("cod" => 2, "nome" => "Fallen Speed", "quantidade" => 10, "valor" => 100.00, "tipo" => "Mousepads");
    $produtos[2] = array("cod" => 3, "nome" => "Hyperx Cloud 2", "quantidade" => 30, "valor" => 550.00, "tipo" => "Headsets");
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
                        <th> Cod</th>
                        <th> Nome </th>
                        <th> Quantidade </th>
                        <th> Valor </th>
                        <th> Tipo </th><br>
                    </tr>
                
        
                    <?php
                        $x = 0;

                        while ($x <= (count($produtos) - 1))
                        {
                    ?>
                            <tr>
                                <td><?php echo $produtos[$x]['cod']; ?></td>
                                <td><?php echo $produtos[$x]['nome']; ?></td>
                                <td><?php echo $produtos[$x]['quantidade']; ?></td>
                                <td><?php echo "R$".$produtos[$x]['valor']; ?></td>
                                <td><?php echo $produtos[$x]['tipo']; ?></td><br>
                            </tr>
                    <?php
                            $x += 1;
                        }
                       
                    ?>

                </table>
            </div>

        </div>
    </body>


</html>