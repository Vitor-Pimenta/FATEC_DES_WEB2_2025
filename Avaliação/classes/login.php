<?php 
session_start();
class Login { 
    private $name = 'admin'; 
    private $password = 'admin'; 
    
    public function verificar_credenciais($name, $password) { 
        if ($name == $this->name) {
            if ($password == $this->password) {
                $_SESSION["logged_in"] = TRUE;
                return TRUE;
            }
        }
        return FALSE;
    } 

    public function verificar_logado() { 
        if ($_SESSION["logged_in"]) {
            return TRUE;
        }
        $this->logout();
    } 

    public function logout() { 
        session_destroy();
        header("Location: index.php");
        exit();
    } 
} 