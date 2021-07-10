<?= $this->extend('template/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Tambah Program</h4>
        <form method="POST" class="form">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nama-program">Nama Program</label>
                        <input type="text" class="form-control" id="nama-program" placeholder="Masukkan nama program" name="nama_program"/>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2" name="simpan">Simpan</button>
            <button class="btn btn-light">Kembali</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
