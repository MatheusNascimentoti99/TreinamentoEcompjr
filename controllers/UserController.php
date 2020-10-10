<?php 

session_start();

class UserController{
	
	public function index(){
		$_SESSION["fault-login"] = null;
		header("Location: /Treinamento2020/views/admin/user/index.php");
	}
	
	public function create(){
		header("Location: /Treinamento2020/views/admin/user/create.php");
		
	}
	
	public function store(){
		if($_POST['password'] == $_POST['password_confirmation']){
			var_dump($_POST);
			$resp = User::create($_POST['name'], $_POST['email'], $_POST['type'], $_POST['password']);
			if($resp){
				header("Location: /Treinamento2020/user/index");
			}
		}
		else{
			header("Location: /Treinamento2020/views/admin/user/create.php");
		}
	}
	
	public function edit($id){
		header("Location: /Treinamento2020/views/admin/user/edit.php?id={$id[0]}");
	}
	
	public function profile(){
		header("Location: /Treinamento2020/views/admin/user/profile.php");
	}
	
	public function update($id){
		if($_POST['password'] == $_POST['password_confirmation']){
			$resp = User::update($id[0], $_POST['name'], $_POST['email'], $_POST['type'], $_POST['password']);
			header("Location: /Treinamento2020/user/index");
			
		}
		else{
			header("Location: /Treinamento2020/views/admin/user/edit.php?id={$id[0]}");   
		}
	}
	
	public function delete($id){
		$resp = User::delete($id[0]);
		header("Location: /Treinamento2020/user/index");
		
	}
	
	public static function all(){
		return User::all();
	}
	
	public function check(){
		$user = User::find($_POST['email'], $_POST['password']);
		
		if($user){
			$_SESSION["user"] = $user;
			$_SESSION["fault-login"] = null;
			header("Location: /Treinamento2020/views/admin/dashboard.php");
		}
		else{
			$_SESSION["fault-login"] = "Senha ou email incorreto";
			header("Location: /Treinamento2020/home/login");
		}
	}
	
	public static function verifyLogin(){
		if(!$_SESSION["user"]){
			header("Location: /Treinamento2020/home/login");
		}
	}
	
	public static function verifyAdmin(){
		if($_SESSION["user"]->getType() != "admin"){
			header("Location: /Treinamento2020/views/admin/dashboard.php");
		}
	}
	
	public static function logout(){
		$_SESSION["user"] = null;
		$_SESSION["fault-login"] = null;
		header("Location: /Treinamento2020/views/login.php");
	}
	
	public static function get($id){
		if($id)
		return $user = User::get($id);
		else
		header("Location: /Treinamento2020/home/index");
	}
}