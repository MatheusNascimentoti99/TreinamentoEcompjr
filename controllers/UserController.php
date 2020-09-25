<?php 

session_start();

class UserController{

    public function index(){
        header("Location: /Treinamento2020/views/user/index.php");
    }

    public function create(){
        header("Location: /Treinamento2020/views/user/create.php");

    }

    public function store(){
        if($_POST['password'] == $_POST['password_confirmation']){
            $resp = User::create($_POST['name'], $_POST['email'], $_POST['type'], $_POST['password']);
            if($resp){
                header("Location: /Treinamento2020/user/index");
            }
        }
    }

    public function edit($id){
        header("Location: /Treinamento2020/views/user/edit.php?id={$id[0]}");
    }

    public function profile(){
    }

    public function update($id){
    }

    public function delete($id){
    }

    public static function all(){
        return User::all();
    }
    
    public function check(){
        $user = User::find($_POST['email'], $_POST['password']);
        if($user){
            $_SESSION["user"] = $user;
            header("Location: /Treinamento2020/views/admin/dashboard.php");

        }
        else{

           header("Location: /Treinamento2020/home/login.php");
           echo "Email ou senha incorretos";
        }
    }

    public static function verifyLogin(){
        if(!$_SESSION["user"]){
            header("Location: /Treinamento2020/home/login.php");
        }
    }
    
    public static function verifyAdmin(){
        if(!$_SESSION["user"].type == "admin"){
            header("Location: /Treinamento2020/home/index");
        }
    }

    public static function logout(){
        $_SESSION["user"] = null;
        header("Location: /Treinamento2020/views/login.php");
    }

    public static function get($id){
    }
}