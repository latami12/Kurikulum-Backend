<?php

if (isset($_COOKIE['user'])) {
    header("Location:sukses.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <form action="cek.php" method="POST">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <button type="submit" name="login">Login</button>
        </ul>
    </form>
</body>
</html>