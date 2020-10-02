<?php
session_start();
if (isset($_SESSION['username'])) {
    header('location:sukses.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <p class="text_login">Login</p>     
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan']=="gagal") {
                echo "<div class='alert'>Username atau Password salah !</div>";
            } else if ($_GET['pesan'] == "logout") {
                echo "<div class='alert'>Berhasil Logout !</div>";
            }
        } 
        ?>    

        <form action="" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form_login" placeholder="Username..." required />

            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form_login" placeholder="Password..." required />
            
            <input type="submit" name="submit" class="login_button" value="LOGIN">
                        
        </form>

        <?php

        if (isset($_POST['submit'])) {
            if ($_POST['username'] == 'latami' && $_POST['password'] == 'latami') {
                $_SESSION['username'] = $_POST['username'];
                header('location:sukses.php');
            } else {
                header('location:session.php?pesan=gagal');
            }
        }

        ?>
    </div>
    
</body>
</html>