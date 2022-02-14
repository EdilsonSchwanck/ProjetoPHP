<?php 

class UserController{

    var $UserModel;

    public function __construct(){
        require_once('models/UserModel.php');
        $this -> UserModel = new UserModel();
    }
    public function validadeLogin(){
        $login = $_POST['login'];
        $password = $_POST['password'];

        
        $result = $this -> UserModel -> getUser($login);

        if($user = $result->fetch_assoc()){
           if($password == $user['password']){
                $_SESSION['login'] = $user;
                header('location:index.php?controller=main&action=index');

           }else{
               echo('Senha inválida!!');
           }

        }else{
            echo('Usuário inválido!!');
        }
    }
}


?>