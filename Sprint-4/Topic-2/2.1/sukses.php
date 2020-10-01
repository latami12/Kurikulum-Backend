<?php
if (!isset($_COOKIE['user'])) {
    header('location: cookie.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YEAY!!!</title>
    <style>
        .ayam {
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <marquee direction="up">
     <h1 class="ayam" align="center">
        CONGRATULATION!!
     </h1></marquee>
     <h3 align="center">BIODATA PEMILIK</h3>
     <form action="" method="get">
         <div class="form-group">
             <ol>
                 <li>Nama : Rahmat Bagus Latami</li>
                 <li>TTL : Jakarta, 14-08-2000</li>
                 <li>Umur : 20</li>
                 <li><strong><em>Status : Jomblo</em></strong></li>
             </ol>
         </div>
         <div class="form-group">
             <button class = "btn btn-danger btn-md btn-block" align="center" type="submit" name="logout">Log out</button>
         </div>
     </form>
     <?php 
        if (isset($_GET["logout"])) {
            setcookie("user", null, -1, "/");
            header('location:cookie.php');
        }
     ?>
</body>
</html>