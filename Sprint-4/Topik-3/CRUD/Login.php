<?php

session_start();
if (isset($_SESSION["email"])) {
    header("Location:index.php");
}
require "controller.php";
$register = new konek();
if(isset($_POST["daftar"])){
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $register->register($username, $password, $email);
    header('Location:Login.php');
}
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $register->login($email, $password);
    // header('Location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">

        <form action="" method="post">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form_login" placeholder="email...">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form_login" placeholder="Password...">
            <input type="submit" name="login" id="submit" class="login_button" value="login">
        </form>
        <p>Belum daftar ? <a href="#" data-toggle="modal" data-target="#daftar">DAFTAR</a></p>
    </div>

    <div class="modal fade" id="daftar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form_login" placeholder="email...">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form_login" placeholder="username...">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form_login" placeholder="Password...">
                        <hr>
                        <input type="submit" name="daftar" id="submit" class="login_button" value="daftar">
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
<?php
