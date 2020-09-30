<?php
 $user = "latami";
 $pass = "untection14";

 if (isset($_POST["login"])) {
     if ($_POST["username"] == $user && $_POST["password"] == $pass) {
        setcookie("user", $_POST["username"], time() + 3600, "/");
        header("Location:sukses.php");
     } else {
         header("Location:gagal.php");
     }
 }
 
 ?>