<?php

class connectpdo
{
    protected $server = "localhost",
    $username         = "latami",
    $password         = "untection14";
    
    public function __construct()
    {
        $this->connect = new PDO("mysql:host=$this->server; dbname=evaluasi3", $this->username, $this->password);
    }

    public function create($nama, $nilai){
        $query = "INSERT INTO input (nama,nilai) VALUE (?, ?)";
        
        $show = $this->connect->prepare($query);
        $show -> execute([$nama, $nilai]);//buat isi yg $query nya 
        
        
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }

    public function read()
    {
        $query = "SELECT * FROM input";
        $show = $this->connect->prepare($query);
        $show -> execute();//buat isi yg $query nya        
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }

    public function count()
    {
        $query = "SELECT COUNT(id) FROM input";
        $show = $this->connect->prepare($query);
        $show -> execute();//buat isi yg $query nya        
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }

    public function avg()
    {
        $query = "SELECT AVG(nilai) FROM input";
        $show = $this->connect->prepare($query);
        $show -> execute();//buat isi yg $query nya        
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }

    public function max()
    {
        $query = "SELECT * FROM input WHERE nilai > 80";
        $show = $this->connect->prepare($query);
        $show -> execute();//buat isi yg $query nya        
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }

    public function min()
    {
        $query = "SELECT * FROM input WHERE nilai <= 65";
        $show = $this->connect->prepare($query);
        $show -> execute();//buat isi yg $query nya        
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }

    public function update()
    {
        $query = "UPDATE input SET nama = andi WHERE id = ?";
        $show = $this->connect->prepare($query);
        $id = (int) trim(fgets(STDIN));
        $show -> execute([$id]);//buat isi yg $query nya        
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }

    public function delete()
    {
        $query = "DELETE input WHERE id = ?";
        $show = $this->connect->prepare($query);
        $id = (int) trim(fgets(STDIN));
        $show -> execute($id);//buat isi yg $query nya        
        $result = $show->fetchAll(pdo::FETCH_ASSOC);
        print_r($result);
    }
}

function pilih() {
    $conn = new connectpdo();

    echo "1. Create \n2. Read \n3. Count \n4. Avg \n5. Max \n6. Update \n7. Delete \n8. Min \n";
    echo "Mau Ngapain ? ";
    $pilih = (int) trim(fgets(STDIN));

    if ($pilih == 1) {
        echo "--------------- \n";
        echo "     create     \n";
        echo "--------------- \n";
        echo " Mau input berapa?";
        $na = trim(fgets(STDIN));
        for ($i=0; $i < $na; $i++) { 
            echo "Nama :";
        $nama = trim(fgets(STDIN));
        echo "Nilai :";
        $nilai = (int) trim(fgets(STDIN));
        $conn->create($nama, $nilai);
        }
        
    } else if ($pilih == 2) {
        echo "--------------- \n";
        echo "      Read      \n";
        echo "--------------- \n";
        $conn->read();
    } else if ($pilih == 3) {
        echo "--------------- \n";
        echo "     Count      \n";
        echo "--------------- \n";
        $conn->count();
    }else if ($pilih == 4) {
        echo "--------------- \n";
        echo "      Avg       \n";
        echo "--------------- \n";
        $conn->avg();
    } else if ($pilih == 5) {
        echo "--------------- \n";
        echo "      Max       \n";
        echo "--------------- \n";
        $conn->max();
    } else if ($pilih == 6) {
        echo "------------------ \n";
        echo "      Update       \n";
        echo "------------------ \n";
        $conn->update();
    }else if ($pilih == 7) {
        echo "------------------ \n";
        echo "     Delete        \n";
        echo "------------------ \n";
        $conn->delete();
    }else {
        echo "--------------- \n";
        echo "      Min       \n";
        echo "--------------- \n";
        $conn->min();
    }

    echo "Jalankan lagi ? (y/n) ";
    $yesno = trim(fgets(STDIN));
    if ($yesno == 'y') {
        pilih();
    }
}

pilih();






