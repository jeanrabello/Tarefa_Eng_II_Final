<?php
    require_once 'usuario_class.php';
    require_once 'usuarioAdmin_class.php';
    require_once 'usuarioComum_class.php';
    
    $user = new Usuario();

    if (isset($_POST['entrar'])) {
        if(($user->autenticarUsuario($_POST['email'], $_POST['senha'])) == 'usuarioAdmin'){
            $user = new UsuarioAdmin($_POST['email'], $_POST['senha']);
            
            session_start();
            $_SESSION['usuarioAdmin'] = serialize($user);
            
            header('Location: indexlogado.php');
        }
        else if(($user->autenticarUsuario($_POST['email'], $_POST['senha'])) == 'usuarioComum'){
            $user = new UsuarioComum($_POST['email'], $_POST['senha']);
            
            session_start();
            $_SESSION['usuarioComum'] = serialize($user);
            
            header('Location: indexlogado.php');
        }
        else
        {
            echo "<script>alert('Os dados inseridos são inválidos');</script>";
        }
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
            <div class="esquerda__login">
                <a href="#"><img src="./Img/logoblack.png"></a>
                <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
                    <label for="email">Email:</label><br>
                    <input type="text" id="email" name="email" placeholder="email@email.com"><br><br>
                    <label for="senha">Senha:</label><br>
                    <input type="password" id="senha" name="senha" placeholder="******"><br><br>
                    <input type="submit" name="entrar" value="Entrar"><br><br>
                </form>
                
                <input type="checkbox" id="lembrar" name="lembrar">
                <label for="lembrar">Lembrar de mim</label>
                <a href="#">Esqueceu sua senha?</a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <a>Ainda não possui uma conta? </a><a href="#">Cadastre-se</a>             
            </div>

            <div class="direita__login">
                <a href="#"><img src="./Img/logotipo.png"></a>
            </div>

        </div>
    </body>
</html>

