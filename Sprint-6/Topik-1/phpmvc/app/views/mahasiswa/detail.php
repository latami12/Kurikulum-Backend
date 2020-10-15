<!-- <div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nrp']; ?></h6>
            <p class="card-text"><?= $data['mhs']['email']; ?></p>
            <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Back</a>
        </div>
    </div>
</div> -->
<div class="container mt-4">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Nrp</th>
                <th scope="col">Email</th>
                <th scope="col">Division</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?= $data['mhs']['nama']; ?></th>
                <th><?= $data['mhs']['nrp']; ?></th>
                <th><?= $data['mhs']['email']; ?></th>
                <th><?= $data['mhs']['jurusan']; ?></th>
            </tr>
        </tbody>
    </table>
    <a class="btn btn-dark btn-sm" href="<?= BASEURL; ?>" role="button"><i class="fa fa-mail-reply"></i> | Back</a>
</div>