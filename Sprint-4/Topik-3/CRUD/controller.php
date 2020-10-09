<?php 

class konek{
    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=tes", "latami", "untection14");
    }
    public function show(){
        $query = "SELECT * FROM santri";
        $result = $this->conn->query($query);
        if (!$result) {
            return "ERROR 404";
        }
        $hasil = $result->fetchAll(PDO::FETCH_ASSOC);//get data dan jadikan array asosiatif
        return $hasil;
    }
    public function show_id($id){
        $query = "SELECT * FROM santri WHERE id= $id";
        $result = $this->conn->query($query);
        if (!$result) {
            return "ERROR 404";
        }
        $hasil = $result->fetchAll(PDO::FETCH_ASSOC);//get data dan jadikan array asosiatif
        return $hasil;
    }
    public function create($nama, $divisi, $asal){
        $query = "INSERT INTO santri (nama,divisi,asal) VALUES ('$nama', '$divisi', '$asal')";
        $result = $this->conn->query($query);
        if (!$result) {
            return "ERROR 404";
        }
        return $result;
    }
    public function update($nama, $divisi, $asal, $id){
        $query = "UPDATE santri SET nama='$nama', divisi='$divisi', asal='$asal' WHERE id= '$id'";
        $result = $this->conn->query($query);
        if (!$result) {
            return "ERROR 404";
        }
        return $result;
    }
    public function delete($id){
        $query = "DELETE FROM santri WHERE id=$id";
        $result = $this->conn->query($query);
        if (!$result) {
            return "ERROR 404";
        }
        return $result;
    }
    public function register($username, $password, $email){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO admin (username, password, email) VALUE ('$username', '$hash', '$email')";
        $result = $this->conn->query($query);
        if (!$result) {
            return "ERROR 404";
        }
        return $result;
    }
    public function login($email, $password){
        $query = "SELECT * FROM admin WHERE email = '$email'";
        $result = $this->conn->query($query);
        $hasil = $result->fetch(PDO::FETCH_ASSOC);//get data dan jadikan array asosiatif
        var_dump($hasil);
        if (count($hasil) > 0) {    
            if (password_verify($password, $hasil['password'])) {
                session_start();
                $_SESSION['email'] = $hasil['email'];
                $_SESSION["status"] = "logedin";
                header('Location: index.php');    
            } else {
                // echo "<script>window.location = 'index.php?pesan=gagal'</script>";
            }
        }
    }
    public function logout(){
        session_start();
        session_destroy();
        session_unset();
        header("Location:Login.php");
    }
}

ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

// $objek = new konek();
// var_dump($objek->show());
// var_dump($objek->show_id(1));

// $objek->create('Rizki', 'Back-End', 'Gorontalo');    
// $objek->update('Maarij', 'BackEnd', 'BalikTembok', 2);
// $objek->delete(2);