<?php


namespace App\Models;


class UserModel extends \CodeIgniter\Model
{
    protected $table = 'm_user as u';
    protected $primaryKey = 'user_id';
    protected $allowedFields = array(
        'user_email',
        'user_password',
        'user_isActive',
        'user_roleid'
    );

    public function getUser($username)
    {
//        return $this->query("SELECT * FROM $this->table WHERE user_email = '$email'")->getResultArray();
//        return $this->orWhere(array(
//            'user_email' => $username,
//        ))->first();
        return $this
            ->select(array(
                'u.user_id',
                'p.profile_nama',
                'u.user_email',
                'u.user_password',
                'u.user_roleid',
                'p.profile_foto',
            ))
            ->join('m_profile as p', 'p.profile_userid = u.user_id')
            ->orWhere([
                'u.user_email' => $username,
                'u.user_username' => $username,
            ])
//            ->getCompiledSelect();
            ->first();
//        return $this
//            ->select(array(
//                'm_user.user_id',
//                'm_user.user_email',
//                'm_user.user_password',
//                'm_role.role_nama'
//            ))
//            ->join('m_role', 'm_role.role_id=m_user.user_roleid')
//            ->orWhere(['m_user.user_email' => $username, 'm_user.user_username' => $username])
//            ->getCompiledSelect();
//        return $this->findAll();
//        return $this->query("SELECT * FROM $this->table WHERE user_email = '$email'")->first();
//        return $this->findColumn('user_email');
    }

    public function createUserAdmin($post)
    {
        $data = array(
            'user_email' => $post['email'],
            'user_username' => $post['username'],
            'user_password' => $post['password'],
            'user_isActive' => 1,
            'user_roleid' => 1
        );
        $this->insert($data);
        return $this->getInsertID();
    }

    public function createUserPembimbing($post)
    {
        $data = array(
            'user_email' => $post['email'],
            'user_username' => $post['username'],
            'user_password' => $post['password'],
            'user_isActive' => 1,
            'user_roleid' => 2
        );
        $this->insert($data);
        return $this->getInsertID();
    }

    public function createUserSiswa($post)
    {
        $data = array(
            'user_email' => $post['email'],
            'user_username' => $post['username'],
            'user_password' => $post['password'],
            'user_isActive' => 1,
            'user_roleid' => 3
        );
        $this->insert($data);
        return $this->getInsertID();
    }
}