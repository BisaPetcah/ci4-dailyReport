<?php
$menu = array(
    'dashboard' => array(
        'access' => array(
            'admin' => '/admin',
            'pembimbing' => '/pembimbing'
        ),
        'icon' => 'icon-grid'
    ),
    'pembimbing' => array(
        'access' => array(
            'admin' => array(
                array(
                    'name' => 'Daftar Pembimbing',
                    'url' => '/admin/pembimbing'
                ),
                array(
                    'name' => 'Tambah Pembimbing',
                    'url' => '/admin/pembimbing/tambah'
                ),
            ),
        ),
        'icon' => 'mdi mdi-account-multiple',
    ),
    'program' => array(
        'access' => array(
            'admin' => '/admin/program',
            'pembimbing' => array(
                array(
                    'name' => 'Daftar Program',
                    'url' => '/pembimbing/program'
                ),
                array(
                    'name' => 'Tambah Program',
                    'url' => '/pembimbing/program/tambah'
                )
            )
        ),
        'icon' => 'icon-grid',
    ),
    'siswa' => array(
        'access' => array(
            'pembimbing' => array(
                array(
                    'name' => 'Daftar Siswa',
                    'url' => '/pembimbing/siswa'
                ),
                array(
                    'name' => 'Tambah Siswa',
                    'url' => '/pembimbing/siswa/tambah'
                )
            ),
        ),
        'icon' => 'mdi mdi-account-multiple',
    ),
    'absensi' => array(
        'access' => array(
            'pembimbing' => '/pembimbing/absensi'
        ),
        'icon' => 'mdi mdi-account-multiple',
    ),
    'catatan' => array(
        'access' => array(
            'admin' => '/admin/catatan',
            'pembimbing' => '/pembimbing/catatan'
        ),
        'icon' => 'mdi mdi-checkbox-marked-outline',
    ),
    'riwayat' => array(
        'access' => array(
            'admin' => '/admin/riwayat',
            'pembimbing' => '/pembimbing/riwayat'
        ),
        'icon' => 'mdi mdi-checkbox-marked-outline',
    ),
    'feedback' => array(
        'access' => array(
            'siswa' => '/feedback'
        ),
        'icon' => 'mdi mdi-account-multiple',
    )
);
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="profile text-center mt-4">
        <img src="<?= $photoProfile ?>" width="120px" height="120px" alt="profile"/>
        <h4 class="mt-3"><?= isset($name) ? $name : 'User' ?></h4>
        <h5 class="text-primary"><?= isset($role) ? ucwords($role) : 'Role' ?></h5>
    </div>
    <ul class="nav">
        <?php foreach ($menu as $m_key => $m_value) : ?>
            <?php foreach ($m_value['access'] as $a_key => $a_value) : ?>
                <?php if ($role == $a_key): ?>
                    <li class="nav-item <?= strtolower($page) == $m_key ? 'active' : '' ?>">
                        <?php if (gettype($a_value) == 'string') : ?>
                            <a class="nav-link" href="<?= $a_value ?>">
                                <i class="<?= $m_value['icon'] ?> menu-icon"></i>
                                <span class="menu-title"><?= ucwords($m_key) ?></span>
                            </a>
                        <?php elseif (gettype($a_value) == 'array') : ?>
                            <a class="nav-link" data-toggle="collapse" href="#<?= $m_key ?>" aria-expanded="false"
                               aria-controls="<?= $m_key ?>">
                                <i class="<?= $m_value['icon'] ?> menu-icon"></i>
                                <span class="menu-title"><?= ucwords($m_key) ?></span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse <?= strtolower($page) == $m_key ? 'show' : '' ?>"
                                 id="<?= $m_key ?>">
                                <ul class="nav flex-column sub-menu">
                                    <?php foreach ($a_value as $sm) : ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?= $sm['url'] ?>"><?= ucwords($sm['name']) ?></a>
                                        </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        <?php endif ?>
                    </li>
                <?php endif ?>
            <?php endforeach ?>
        <?php endforeach ?>
        <hr class="d-lg-none" style="border: 1px solid #0066cc; width: 75%"/>
        <li class="nav-item d-lg-none">
            <a class="nav-link" href="/auth/logout">
                <i class="ti-power-off menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>
    </ul>
</nav>