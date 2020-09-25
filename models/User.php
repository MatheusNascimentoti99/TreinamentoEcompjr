<?php

class User{
    private $id;
    private $name;
    private $email;
    private $type;
    private $password;

    public function __construct($id, $name, $email, $type){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->type = $type;
    }

    public static function find($email, $password){
        $connection = Connection::getConnection();
        $query = "select * from users where email = '{$email}' and password = '{$password}'";
        $result = mysqli_query($connection, $query);
        if(mysqli_num_rows($result) ==1){
            $user = mysqli_fetch_assoc($result);
            $var = new User($user["id"], $user["name"], $user["email"], $user["type"]);
            return $var;
        }
    }

    public static function get($id){
    }

    public static function create($name, $email, $type, $password){
        $connection = Connection::getConnection();
        $query = "insert into users (name, email, type, password) values ('{$name}', '{$email}', '{$type}, '{$password}')";
        $result = mysqli_query($connection, $query);
        if(mysqli_num_rows($result) ==1){
            return true;
        }

    }

    public static function all(){
        $connection = Connection::getConnection();
        $query = "SELECT * FROM users";
        $result = mysqli_query($connection, $query);
        $users = [];
        if($i = 0; $i < mysqli_num_rows($result); $i++){
           $user = mysqli_num_rows($result);
           $var = new User($user["id"], $user["name"], $user["email"], $user["type"]); 
           $users[i] = $var;
        }
        return users
    }

    public static function delete($id){
    }

    public static function update($id, $name, $email, $type, $password, $password_confirmation){
    }

    public function getId(){
        return $this->id;
    }
    
    public function getType(){
        return $this->type;
    }

    public function getName(){
        return $this->name;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getPassword(){
        return $this->password;
    }
}