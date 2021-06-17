<<<<<<< HEAD
<?php
    require_once 'usuario_class.php';
    require_once 'usuarioAdmin_class.php';

    session_start();
?>

<div class="cabecalho__logo">
    <a href=""><img src="./Img/Logo.png"/></a>
</div>

<ul class="cabecalho__menu">
    <li><a href="">Mouses       </a> </li>
    <li><a href="">Mousepads    </a> </li>
    <li><a href="">Monitores    </a> </li>
    <li><a href="">Teclados     </a> </li>
    <li><a href="">Headphones   </a> </li>
    <li><a href="">Headsets     </a> </li>
    <li><a href="">Cadeiras     </a> </li>
    <li><a href="">Mousepads    </a> </li>

    <li>
        <div class="menu__usuario">
            <button class="dropbtn"><img src="./Img/usuario.svg" /></button>
            <div class="menu__usuario-conteudo">
                <a href="#">Meu Perfil       </a>
                <a href="">Gerir Produtos    </a>
                <a href="" onclick="relatorio()">Gerar Relatório   </a>
                
                <script>
                    function relatorio() {
                        alert('<?php  unserialize($_SESSION['usuarioAdmin'])->gerarRelatorio() ?>');
                    }
                </script>

                <a href="login.php" onclick="logout()">Logout   </a>
                <script>
                    function logout() {
                        alert('<?php  echo "Encerrando Sessão..." ?>');
                        session_destroy();
                    }
                </script>


            </div>
        </div>
    </li>
</ul>


=======
<?php
    require_once 'usuario_class.php';
    require_once 'usuarioAdmin_class.php';

    session_start();
?>

<div class="cabecalho__logo">
    <a href=""><img src="./Img/Logo.png"/></a>
</div>

<ul class="cabecalho__menu">
    <li><a href="">Mouses       </a> </li>
    <li><a href="">Mousepads    </a> </li>
    <li><a href="">Monitores    </a> </li>
    <li><a href="">Teclados     </a> </li>
    <li><a href="">Headphones   </a> </li>
    <li><a href="">Headsets     </a> </li>
    <li><a href="">Cadeiras     </a> </li>
    <li><a href="">Mousepads    </a> </li>
    <li>
        <div class="menu__usuario">
            <button class="dropbtn"><img src="./Img/usuario.svg" /></button>
            <div class="menu__usuario-conteudo">
                <a href="#">Meu Perfil       </a>
                <a href="login.php" onclick="logout()">Logout   </a>
                <script>
                    function logout() {
                        alert('<?php  echo "Encerrando Sessão..." ?>');
                        session_destroy();
                    }
                </script>


            </div>
        </div>
    </li>
</ul>


>>>>>>> código
