<?php

class Admin_model
{
//     public function register($username, $password, $email){
//         $hash = password_hash($password, PASSWORD_DEFAULT);
//         $query = "INSERT INTO admin (username, password, email) VALUE ('$username', '$hash', '$email')";
//         $result = $this->conn->query($query);
//         if (!$result) {
//             return "ERROR 404";
//         }
//         return $result;
//     }
//     public function login($email, $password){
//         $query = "SELECT * FROM admin WHERE email = '$email'";
//         $result = $this->conn->query($query);
//         $hasil = $result->fetch(PDO::FETCH_ASSOC);//get data dan jadikan array asosiatif
//         var_dump($hasil);
//         if (count($hasil) > 0) {    
//             if (password_verify($password, $hasil['password'])) {
//                 session_start();
//                 $_SESSION['email'] = $hasil['email'];
//                 $_SESSION["status"] = "logedin";
//                 header('Location: index.php');    
//             } else {
//                 // echo "<script>window.location = 'index.php?pesan=gagal'</script>";
//             }
//         }
//     }
//     public function logout(){
//         session_start();
//         session_destroy();
//         session_unset();
//         header("Location:Login.php");
//     }

private $db;

public function __construct()
{
    $this->db = new Database;
}

public function getAllArtikel()
{
    $this->db->query("SELECT * FROM  admin ");
    return $this->db->resultSet();
}
public function loginUser($data)
{
    $query=("SELECT * FROM admin where username=:username && password=:password");
    $this->db->query($query);
    $this->db->bind('username', $data['username']);
    $this->db->bind('password', $data['password']);
    $this->db->execute();
    if( $hasil = $this->db->single()){
        $_SESSION['email'] = $data['username'];
        $_SESSION['status'] = 'Logged In';
        return true;
    }
}
public function signupUser($data)
{
    $query=("SELECT * FROM admin where username=:username && password=:password");
    $this->db->query($query);
    $this->db->bind('username', $data['username']);
    $this->db->bind('password', $data['password']);
    $this->db->execute();
    if( $hasil = $this->db->rowCount()){;
        return false;
    }
    $query = "INSERT INTO admin (username, password, email) VALUES (:username, :password, :email)";
    $this->db->query($query);
    $this->db->bind('username', $data['username']);
    $this->db->bind('password', $data['password']);
    $this->db->bind('email', $data['email']);
    $this->db->execute();
    return $this->db->rowCount();
}
}


ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);
