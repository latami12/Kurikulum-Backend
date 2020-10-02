<?php
if (isset($_POST["login"])) {
    if ($_POST["username"] == "latami" && $_POST["password"] == "untection14") {
        header("Location:inputdata.php");
    } else {
        header("Location:login.php");
    }
}
        ?>
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form method="post" action="">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN" name="login">
 
			<br/>
			<br/>
		</form>
        </div>
 
</body>
</html>