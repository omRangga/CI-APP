<div class="container">
   <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="row mt-3">
        <div class="div-col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah data mahasiswa</a>
        </div>
    </div>

     <div class="row-mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Cari Data Mahasiswa....">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Cari</button>
                        
                    </div>
                    
                </div>
                
            </form>
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