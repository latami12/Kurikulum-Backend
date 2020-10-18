<div class="row">
    <div class="col-lg-12">
        <?php Flasher::flash(); ?>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            <div class="row">
                <?php foreach ($data['art'] as $art) : ?>
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-lg">
                            <img src="<?= BASEURL; ?>/img/<?= $art['img']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $art['judul']; ?></h5>
                                <p class="card-text"><?= substr($art['artikel'], 0, 500) . '...'; ?>
                                </p>

                                <div>
                                    <small class="text-mute"><?= $art['tanggal']; ?></small>
                                </div>
                                <hr>
                                <a href="<?= BASEURL; ?>/artikel/detail/<?= $art['id']; ?>" class="btn btn-dark">Read More</a>
                                <a href="<?= BASEURL; ?>/artikel/hapus/<?= $art['id']; ?>" class="btn btn-dark" onclick="return confirm('Anda yakin?')"><i class="fa fa-trash"></i></a>
                                <a href="<?= BASEURL; ?>/artikel/ubah/<?= $art['id']; ?>" class="btn btn-dark tampilModalUbah" data-id="<?= $art['id']; ?>" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-2">
            <div class="row position-fixed mb-2">
                <div class="card shadow-lg" style="width: 12rem;">
                    <div class="card-header">
                        Navigator
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center" id="tombolTambahData"><a href="<?= BASEURL; ?>/artikel/index/" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil-square"></i> | Create</a></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"><a href="https://www.wikipedia.org/"><i class="fa fa-paper-plane"></i> | Link</a></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center"><a href="http://localhost/blog/public/artikel"><i class="fa fa-refresh"></i> | Refresh</a></li>
                    </ul>
                </div>
            </div>
            <!-- <div class="row">
                <div class="card shadow-lg" style="width: 12rem;">
                    <div class="card-header">
                        Kategori
                    </div>
                    <?php foreach ($data['cat'] as $art) : ?>
                        <ul class="list-group list-group-flush">
                            <a href="<?= BASEURL; ?>/artikel/index/">
                                <li class="list-group-item d-flex justify-content-between align-items-center" id="tombolTambahData"><?= $art['kategori'] ?>
                            </li>
                            </a>
                        </ul>
                    <?php endforeach; ?>
                </div>
            </div> -->
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="judulModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModalLabel">Create Article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/artikel/tambah" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id"><!-- // buat di script.js nya  -->
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul...">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Article</span>
                        </div>
                        <textarea class="form-control" name="artikel" id="artikel" placeholder="Article..."></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label for="artikel">Artikel</label>
                        <input type="text" class="form-control" id="artikel" name="artikel" placeholder="artikel...">
                    </div> -->
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="kategori" name="kategori">
                            <option value="Biografi">Biografi</option>
                            <option value="kurikulum">kurikulum</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="hidden" class="form-control" name="imghide" id="imghide">
                        <input type="file" class="form-control" id="img" name="img" placeholder="Image...">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-dark">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>