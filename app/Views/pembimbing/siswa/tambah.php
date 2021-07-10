<?= $this->extend('template/main') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Register Siswa</h4>
        <!-- Awal Form -->
        <form method="POST" enctype="multipart/form-data" class="form">
            <div class="form-group">
                <label for="exampleInputName1">Nama</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama_siswa"/>
            </div>
            <div class="form-group">
                <label for="exampleSelectGender">Jenis Kelamin</label>
                <select class="form-control" id="exampleSelectGender" name="jenis_kelamin">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kelas">Nama Kelas</label>
                <div class="row">
                    <div class="col">
                        <select class="js-example-basic-single w-100" name="id_kelas">
                            <?php foreach($daftarKelas as $data): ?>
                                <option value="<?= $data['id_kelas']?>"><?= $data['nama_kelas']?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">Alamat</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Alamat" name="alamat_siswa"/>
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">No HP</label>
                <input type="number" class="form-control" id="exampleInputCity1" placeholder="No HP" name="noHp"/>
            </div>
            <div class="form-group">
                <label for="exampleTextarea1">Catatan Khusus :</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4" name="catatan_khusus"></textarea>
            </div>
            <div class="form-group mt-3">
                <label>Upload Foto</label>
                <input type="file" name="foto_profile" class="file-upload-default"/>
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image"/>
                    <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                            </span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2" name="tambah">Tambah</button>
            <button class="btn btn-light">Kembali</button>
        </form>
        <!-- Akhir Form -->
        <?php
        if(isset($_POST['tambah'])) {
            echo tambahSiswa($conn, $_POST, $_FILES);
        }
        ?>
    </div>
</div>
<?= $this->endSection() ?>
