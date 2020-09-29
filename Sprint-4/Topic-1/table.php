<?php
    mysqli_connect("localhost","latami","untection14")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="barang">Barang </label>
                <input type="text" name="barang" id="barang">
            </li>
            <li>
                <label for="harga">Harga</label>
                <input type="number" name="harga" id="harga">
            </li>
            <button type="submit" name="submit" >Submit</button>
        </ul>
    </form>
    <?php
        if (isset($_POST["submit"]))
        {
            echo "<script>document.getElementById('form').style.display = 'none';</script>";
            $b = $_POST["barang"];
            $h = $_POST["harga"];
            ?>

            <form action="data.php" method="get">
                <input type="hidden" name="barang" value="<?php echo $b ?>">
                <input type="hidden" name="harga" value="<?php echo $h ?>">
                <ul>
                    <li>
                        <label for="kurir">Kurir</label>
                        <input type="text" name="kurir" id="kurir">
                    </li>
                    <li>
                        <label for="pengirim">Pengirim</label>
                        <input type="text" name="pengirim" id="pengirim">
                    </li>
                    <li>
                        <label for="asal">Asal</label>
                        <input type="text" name="asal" id="asal">
                    </li>
                    <li>
                        <label for="tujuan">Tujuan</label>
                        <input type="text" name="tujuan" id="tujuan">
                    </li>
                    <button type="submit" name="submit">Submit</button>
                </ul>
            </form>

            <?php
        }
    ?>
</body>
</html>