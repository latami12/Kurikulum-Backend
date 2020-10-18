<br>
<div class="container mt-3">
  <div class="row">
    <div class="col-md-9">
      <div class="row">
        <div class="card shadow-lg mt-3 mb-3" style="width: 50rem">
          <img src="<?= BASEURL; ?>/img/<?= $data['art']['img']; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?= $data['art']['judul']; ?></h5>
            <p class="card-text"><?= $data['art']['artikel']; ?></p>
            <p class="card-text"><small class="text-muted"></small><?= $data['art']['tanggal']; ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2">
      <div class="row position-fixed mb-2">
        <div class="card shadow-lg" style="width: 12rem;">
          <div class="card-header">
            Navigator
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center"><a href="https://www.wikipedia.org/"><i class="fa fa-paper-plane"></i> | Link</a></li>
            <li class="list-group-item d-flex justify-content-between align-items-center"><a href="http://localhost/blog/public/artikel"><i class="fa fa-reply"></i> | Back</a></li>
            <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?= BASEURL; ?>/home/index/"><i class="fa fa-home"></i> | Back home</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>