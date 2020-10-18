<body class="w3-light-grey  ">
  <div class="w3-content" style="max-width:1400px">
    <header class="w3-container w3-center w3-padding-32 mt-5">
      <h1><b>MY BLOG</b></h1>
      <p>Welcome to the blog of <span class="w3-tag">Latami</span></p>
    </header>

    <body>
      <div class="box shadow-lg">

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
              <form action="<?= BASEURL;?>/Admin/login" method="post">
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
      <!-- <div class="w3-row">
      <div class="w3-col l8 s12">
        <?php foreach ($data['art'] as $art) : ?>
          <div class="w3-card-4 w3-margin w3-white">
            <img src="/w3images/woods.jpg" alt="" style="width:100%">
            <div class="w3-container">
              <h3><b><?= $art['judul']; ?></b></h3>
              <h5>Tanggal Pembuatan,<span class="w3-opacity"><?= $art['tanggal']; ?></span></h5>
            </div>
            <div class="w3-container">
              <p><?= substr($art['artikel'], 0, 500) . '...'; ?>.</p>
              <div class="w3-row">
                <div class="w3-col m8 s12">
                  <button class="btn btn-dark mb-3">
                    <a href="<?= BASEURL; ?>/artikel/index/">Read More >></a>
                  </button>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <hr>
      </div>
      <div class="w3-col l4">
        <div class="w3-card w3-margin w3-margin-top">
          <img src="<?= BASEURL; ?>/img/ahh.png" style="width:100%">
          <div class="w3-container w3-white">
            <h4 align="center"><b>أهلاً وسهلاً بكم</b></h4>
          </div>
        </div>
        <hr>
      </div>
      <div class="w3-col l4">
        <div class="w3-card w3-margin w3-margin-top">
          <img src="<?= BASEURL; ?>/img/index.jpeg" style="width:100%">
          <div class="w3-container w3-white">
            <h4><b>Wellcome to my blog dude^.</b></h4>
          </div>
        </div>
        <hr>
      </div>
    </div><br>
  </div>
  <footer class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="btn btn-outline-light btn-sm mt-2 mb-2"><a href="<?= BASEURL; ?>/artikel/index/">Next >></a>
    </button>
  </footer> -->