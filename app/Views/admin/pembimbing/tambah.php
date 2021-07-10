<?= $this->extend('template/main') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Tambah Pembimbing</h4>
        <form enctype="multipart/form-data" method="POST" class="form">
            <div class="form-group">
                <label for="nama">Nama Pembimbing</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap pembimbing" name="nama"/>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username"/>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" name="email"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password"
                       name="password"/>
            </div>
            <div class="form-group">
                <label for="jenis-kelamin">Jenis Kelamin</label>
                <select class="form-control" name="jenis-kelamin" id="jenis-kelamin">
                    <option value="" disabled selected>Pilih jenis kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" cols="30" rows="10" placeholder="Masukkan alamat"
                          class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="noHp">No HP</label>
                <input type="text" class="form-control" id="noHp" placeholder="No HP" name="noHp"/>
            </div>
            <div class="form-group">
                <label>Upload photo</label>
                <input type="file" name="foto_profile" class="file-upload-default"/>
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled
                           placeholder="Tambahkan Foto Profile"/>
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary"
                                type="button">Upload</button>
                    </span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2" name="tambah">Tambah</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
