<div class="container mt-4 shadow">
    <div class="row mb-1">
        <div class="col-lg-6">
            <?= Flasher::flash(); ?>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-lg-6">
            <button type="button" class="btn btn-outline-dark tombolTambahData" data-toggle="modal" data-target="#formModal">
                <i class="fa fa-plus-circle"> | Tambah</i>
            </button>
        </div>
    </div>
    
    <div class="row ">
        <div class="col-lg-6">
        <hr>
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa" name="keyword" id="keyword" autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-outline-dark" type="submit" id="cari"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row pb-5">
        <div class="col-lg-6">
            <hr>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-pill badge-light float-right ml-1" onclick="return confirm('apa anda yakin?');"><i class="fa fa-trash-o"></i></a>
                        <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-pill badge-light float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>"><i class="fa fa-pencil-square-o"></i></a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-pill badge-light float-right ml-1"><i class="fa fa-info"></i></a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="nama.." required>
                    </div>
                    <div class="form-group">
                        <label for="nrp">Nrp</label>
                        <input type="number" class="form-control" name="nrp" id="nrp" placeholder="nrp.." required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email.." required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan" required>
                            <option value="Front-End">Front-End</option>
                            <option value="Back-End">Back-End</option>
                            <option value="Mobile">Mobile</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>