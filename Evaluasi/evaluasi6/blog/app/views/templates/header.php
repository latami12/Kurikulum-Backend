<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HALAMAN <?= $data['judul']; ?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: "Raleway", sans-serif
    }
    

h1 {
    text-align: center;
    font-weight: 300;
}

.text_login {
    text-align: center;
    text-transform: uppercase;
}

.box {
    width: 350px;
    background: rgb(255, 255, 255);
    margin: 80px auto;
    margin-top: -10px;
    padding: 30px 20px;
    box-shadow: 0 4px 4px 0 rgba(0, 0, 0, .4);
    border-radius: 5px;
}

.box p {
    font-size: 0.8rem;
}

.box p a {
    text-decoration: none;
}

label {
    font-size: 0.8rem; 
}

.form_login {
    box-sizing: border-box;
    width: 100%;
    padding: 10px;
    font-size: 0.8rem;
    margin-bottom: 20px;
}

.login_button {
    background: #151515;
    color: white;
    font-size: 0.8rem;
    width: 100%;
    border: 1px solid #151515;
    padding: 10px 20px;
    transition: 0.2s;
}

.login_button:hover {
    background: white;
    color: black;
    transition: 0.2s;
    cursor: pointer;
}

.alert {
    margin: 10px;
    margin-left: 0;
    color: red;
    font-style: italic;
}

.is_error {
    color: white;
    background-color: red;
    margin: 0 0 10px 0;
    font-size: 1em;
    padding: 10px;
    text-align: center;
    transition: all 0.3s;
}
.social-link {
        width: 30px;
        height: 30px;
        border: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #666;
        border-radius: 50%;
        transition: all 0.3s;
        font-size: 0.9rem;
    }

    .social-link:hover,
    .social-link:focus {
        background: #ddd;
        text-decoration: none;
        color: #555;
    }
  </style>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="<?= BASEURL; ?>/home">Beranda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link <?php  echo $_SESSION['status'] == 'Logged In' ? '' : 'disabled'; ?>" href="<?= BASEURL; ?>/artikel">Article<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link <?php  echo $_SESSION['status'] == 'Logged In' ? '' : 'disabled'; ?>" href="<?= BASEURL; ?>/about" tabindex="-1">Author</a>
      </li>
    </ul>
    <form action="<?= BASEURL; ?>/artikel/cari/" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." name="keyword" id="keyword" autocomplete="off">
        <div class="input-group-append">
          <button class="btn btn-outline-light" type="submit" id="tombolCari">
            <i class="fa fa-search"></i></button>
        </div>
      </div>
    </form>
  </div>
</nav>
<br>