<br>
<div class="container">
    <div class="w3-col l4">
        <div class="w3-card w3-margin w3-margin-top shadow-lg">
            <img src="<?= BASEURL; ?>/img/latami.jpg" style="width:100%">
            <div class="w3-container w3-white">
                <h4><b>My Name <?= $data['nama'] ?></b></h4>
                <hr>
                <p>Umur : <?= $data['umur'] ?> th,<br> Pekerjaan : <?= $data['pekerjaan'] ?>.</p>
            </div>
        </div>
    </div>
    <div class="w3-col l4">
        <div class="w3-card w3-margin w3-margin-top shadow-lg">
            <img src="<?= BASEURL; ?>/img/images.jpeg" style="width:100%">
            <div class="w3-container w3-white">
                <h4><b>Follow me on media social :</b></h4>
                <ul class="d-flex justify-content-center" style="padding-left: 0;">
                    <a class="social-link m-1" href="https://www.instagram.com/latami8/" role="button"><i class="fa fa-instagram"></i></a>
                    <a class="social-link m-1" href="https://www.facebook.com/rahmat.baguslatami" role="button"><i class="fa fa-facebook"></i></a>
                    <a class="social-link m-1" href="https://twitter.com/Latami__" role="button"><i class="fa fa-twitter"></i></a>
                    <a class="social-link m-1" href="https://github.com/latami12" role="button"><i class="fa fa-github"></i></a>
                </ul>
                <hr>
                <a class="btn btn-outline-dark btn-sm mb-4 btn-block" href="<?= BASEURL; ?>/artikel/logout" role="button" onclick="return confirm('Anda yakin ?');"><i class="fa fa-home"></i> | Log out</a>
            </div>
        </div>
    </div>
    <div class="w3-col l4">
        <div class="w3-card w3-margin w3-margin-top shadow-lg">
            <img src="<?= BASEURL; ?>/img/th.png" style="width:100%">
            <div class="w3-container w3-white">
                <h4 align="center"><b>جزاكم الله خيراً كثيراً</b></h4>
            </div>
        </div>
    </div>
    <div class="w3-col l4">
        <div class="w3-card w3-margin w3-margin-top shadow-lg">
            <img src="<?= BASEURL; ?>/img/thx.jpeg" style="width:100%">
            <div class="w3-container w3-white">
                <h4><b>Thank you for your support</b></h4>
            </div>
        </div>
    </div>
</div>