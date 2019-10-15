<div class="container">
    
    <div class="row mt-3">
        <div class="div-col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah data mahasiswa</a>
        </div>
    </div>



    <div class="row-mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>