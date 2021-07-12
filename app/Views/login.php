<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Daily Report | Login</title>
    <link rel="stylesheet" href="/vendors/feather/feather.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="/images/favicon.png"/>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper auth px-0 bg-primary">
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
                        <h4>Silahkan Login</h4>
                        <form action="" method="POST" class="pt-3">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg <?=$validation->hasError('username') ? 'is-invalid' : ''?>" id="username"
                                       placeholder="Username" name="username">
                                       <div class="invalid-feedback">
                                           <?=$validation->getError('username')?>
                                       </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg <?=$validation->hasError('password') ? 'is-invalid' : ''?>" id="password"
                                       placeholder="Password" name="password">
                                       <div class="invalid-feedback">
                                           <?=$validation->getError('password')?>
                                       </div>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input" name="rememberme">
                                        Ingat saya
                                    </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        name="masuk">Masuk
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/vendors/js/vendor.bundle.base.js"></script>
<script src="/js/off-canvas.js"></script>
<script src="/js/hoverable-collapse.js"></script>
<script src="/js/template.js"></script>
<script src="/js/settings.js"></script>
<script src="/js/todolist.js"></script>
</body>
</html>
