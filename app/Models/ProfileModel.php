<?php


namespace App\Models;


class ProfileModel extends \CodeIgniter\Model
{
    protected $table = 'm_profile';
    protected $primaryKey = 'profile_id';
    protected $allowedFields = array(
        'profile_nama',
        'profile_jenisKelamin',
        'profile_noHp',
        'profile_alamat',
        'profile_foto',
        'profile_userid',
    );

    public function createProfile($post)
    {
        $data = array(
            'profile_nama' => $post['nama'],
            'profile_jenisKelamin' => $post['jenisKelamin'],
            'profile_noHp' => $post['noHp'],
            'profile_alamat' => $post['alamat'],
            'profile_foto' => $post['foto'],
            'profile_userid' => $post['userid'],
        );
        $this->insert($data);
        return $this->getInsertID();
    }
}