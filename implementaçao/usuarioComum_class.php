<?php

    class UsuarioComum extends Usuario{

        function __construct($email, $senha){
            $this->email = $email;
            $this->senha = $senha;
        }
    }

?>