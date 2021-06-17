<?php    

    class Usuario{

        public $email;
        public $senha;

        public function autenticarUsuario($email, $senha){
            
            if ($email == 'admin@admin.com' && $senha == 'Admin123')
            {
                return 'usuarioAdmin';
            }
            else if($email == 'usuario@comum.com' && $senha == 'User123')
            {
                return 'usuarioComum';
            }
            else
            {
                echo "<script>alert('Os dados inseridos são inválidos');</script>";
            }
        }
        
    }

?>