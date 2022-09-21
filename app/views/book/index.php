<div class="container">
    <h3 class="mb-3 text-capitalize text-danger">Daftar Grimore <?= $data['nama'] ?></h3>
    <table class="table table-dark table-bordered table-striped text-light">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tanggal Terjadi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($data['buku'] as $buku) {
            ?>
            <tr>
            <th scope="row"><?php echo $no++ ?></th>
            <th><?= $buku['judul'] ?></th>
            <th><?= $buku['penulis'] ?></th>
            <th><?= $buku['tanggal_selesai'] ?></th>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>