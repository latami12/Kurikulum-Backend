<?php

class Connect
{
    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost; dbname=sprint4", 'latami', 'untection14');
    }

    public function show() {
        $query = $this->db->prepare("SELECT * FROM `data`");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function create($data) {
        $query = $this->db->prepare("INSERT INTO `data` (barang, harga, kurir, pengirim, asal, tujuan) VALUES (?, ?, ?, ?, ?, ?)");
        $query->execute($data);
    }

}

$conn = new Connect();

if (isset($_GET["submit"])) 
{
    $data = 
    [
        $br = $_GET["barang"],
        $hr = $_GET["harga"],
        $k = $_GET["kurir"],
        $p = $_GET["pengirim"],
        $a = $_GET["asal"],
        $t = $_GET["tujuan"],
    ];
    // print_r($data);

    $conn->create($data);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <table border="1" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Barang</th>
                <th>Harga</th>
                <th>Kurir</th>
                <th>Pengirim</th>
                <th>Asal</th>
                <th>Tujuan</th>
            </tr>
        </thead>
    <?php foreach ($conn->show() as $data) : ?>
        <tr>
            <td><?= $data['id'] ?></td>
            <td><?= $data['barang'] ?></td>
            <td><?= $data['harga'] ?></td>
            <td><?= $data['kurir'] ?></td>
            <td><?= $data['pengirim'] ?></td>
            <td><?= $data['asal'] ?></td>
            <td><?= $data['tujuan'] ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
    <a href="table.php"><button type="submit">Kembali</button></a>
</head>
<body>
    
</body>
</html>