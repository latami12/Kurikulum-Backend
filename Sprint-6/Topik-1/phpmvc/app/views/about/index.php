<div class="container">
    <div class="jumbotron mt-4">
        <h3 class="display-6">About me</h1>
        <hr>
            <div class="row">
                <div class="col-md-3">
                    <img src="<?= BASEURL; ?>/img/latami.jpg" alt="Latami" width="200" class="rounded-circle shadow mt-2 mb-2">
                </div>
                <div class="col-md-4">
                    <p class="lead">Assalammu'alaikum Warahmatullahi Wa Barokatuh!! <br> Saya : <?= $data['nama'] ?>,<br> Umur : <?= $data['umur'] ?> th,<br> Pekerjaan : <?= $data['pekerjaan'] ?>.</p>
                </div>
                <div class="col-md-4">
                    <p>Follow me on social media :</p>
                    <a class="btn btn-outline-dark btn-sm mb-1" href="https://www.instagram.com/latami8/" role="button"><i class="fa fa-instagram"></i> | Instagram</a><br>
                    <a class="btn btn-outline-dark btn-sm mb-1" href="https://www.facebook.com/rahmat.baguslatami" role="button"><i class="fa fa-facebook"></i> | Facebook</a><br>
                    <a class="btn btn-outline-dark btn-sm" href="https://twitter.com/Latami__" role="button"><i class="fa fa-twitter"></i> | Twitter</a><br>
                    <hr>
                    <p>Thank you..</p>
                    <a class="btn btn-outline-dark btn-sm" href="<?= BASEURL; ?>" role="button"><i class="fa fa-mail-reply"></i> | Back</a>
                </div>
            </div>
    </div>
</div>