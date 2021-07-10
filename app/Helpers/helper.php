<?php
function role($id)
{
    $roleName = null;
    switch ($id) {
        case 1:
            $roleName = 'admin';
            break;
        case 2:
            $roleName = 'pembimbing';
            break;
        case 3:
            $roleName = 'siswa';
            break;
    }
    return $roleName;
}