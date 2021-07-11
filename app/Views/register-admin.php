<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daily Report | Register Admin</title>
    <link rel="stylesheet" href="/vendors/feather/feather.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="/images/favicon.png"/>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper bg-primary auth px-0">
            <div class="row mx-0">
                <div class="col d-flex justify-content-center">
                    <div class="brand-logo">
                        <img src="/images/logo.png" alt="logo">
                    </div>
                </div>
            </div>
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <h4>Registrasi Admin</h4>
                        <!-- Awal Form Register -->
                        <form method="POST" enctype="multipart/form-data" class="pt-3">
			<?= csrf_field() ?>
                            <div class="form-group">
                                <input type="text"
                                       class="form-control form-control-lg <?= $validation->hasError('nama') ? 'is-invalid' : '' ?>"
                                       id="nama"
                                       placeholder="Nama Lengkap" name="nama" value="<?= old('nama') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text"
                                       class="form-control form-control-lg <?= $validation->hasError('email') ? 'is-invalid' : '' ?>"
                                       id="email"
                                       placeholder="Email" name="email" value="<?= old('email') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password"
                                       class="form-control form-control-lg <?= $validation->hasError('password') ? 'is-invalid' : '' ?>"
                                       id="password"
                                       placeholder="Password" name="password" value="<?= old('password') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password"
                                       class="form-control form-control-lg <?= $validation->hasError('pass_confirm') ? 'is-invalid' : '' ?>"
                                       id="password2"
                                       placeholder="Konfirmasi Password" name="pass_confirm"
                                       value="<?= old('pass_confirm') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('pass_confirm') ?>
                                </div>
                            </div>
                            <div class="form-group">

                                <select class="form-control <?= $validation->hasError('jenis_kelamin') ? 'is-invalid' : '' ?>"
                                        name="jenis_kelamin" id="jenis-kelamin">
                                    <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                    <?php $jk = array('Laki-laki', 'Perempuan') ?>
                                    <?php foreach ($jk as $jk_value) : ?>
                                        <option value="<?= $jk_value ?>" <?= old('jenis_kelamin') == $jk_value? 'selected': '' ?>><?= $jk_value ?></option>
                                    <?php endforeach ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('jenis_kelamin') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text"
                                       class="form-control form-control-lg <?= $validation->hasError('noHp') ? 'is-invalid' : '' ?>"
                                       id="noHp"
                                       placeholder="No HP" name="noHp" value="<?= old('noHp') ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('noHp') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="alamat" id="alamat"
                                          class="form-control <?= $validation->hasError('alamat') ? 'is-invalid' : '' ?>"
                                          placeholder="Alamat" cols="30" rows="5"><?= old('alamat') ?></textarea>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('alamat') ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group col-xs-12">
                                    <input type="file"
                                           class="form-control file-upload-info <?= $validation->hasError('foto_profile') ? 'is-invalid' : '' ?>"
                                           placeholder="Upload Image"
                                           name="foto_profile" value="<?= old('foto_profile') ?>"/>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('foto_profile') ?>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted <?= $validation->hasError('konfirmasi') ? 'is-invalid' : '' ?>">
                                            <input type="checkbox"
                                                   class="form-check-input"
                                                   name="konfirmasi">
                                            Data sudah benar?
                                        </label>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('konfirmasi') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit"
                                            class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                            name="daftar">Daftar
                                    </button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Sudah Punya Akun? <a href="/" class="text-primary">Masuk</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/template.js"></script>
<script src="js/settings.js"></script>
<script src="js/todolist.js"></script>
</body>
</html>
