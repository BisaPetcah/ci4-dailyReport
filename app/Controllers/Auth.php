<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $post = $this->request->getVar();
        if (isset($post['masuk'])) {
            $user = $this->userModel->getUser($post['username']);
            if ($user) {
                if ($post['password'] == $user['user_password']) {
                    return redirect()->to('/admin');
                }
            }
        }
        return view('login');
    }

    public function registerAdmin()
    {
        $data = array(
            'validation' => $this->validation,
        );

        return view('register-admin', $data);
    }

    public function proses_registerAdmin()
    {
        $post = $this->request->getVar();

        if (!$this->validate($this->validation->getRuleGroup('daftar'))) {
            return redirect()->to('/register-admin')->withInput()->with('validation', $this->validation);
        }

        if (isset($post['daftar'])) {
            $data = array(
                'nama' => $post['nama'],
                'email' => $post['email'],
                'password' => $post['password'],
                'jenisKelamin' => $post['jenis_kelamin'],
                'noHp' => $post['noHp'],
                'alamat' => $post['alamat'],
                'foto' => $this->request->getFile('foto_profile'),
            );
            $id_user = $this->userModel->createUserAdmin($data);
            $data['userid'] = $id_user;

            $this->profileModel->createProfile($data);

            return redirect()->to('/');
        }
    }

    public
    function logout()
    {
        return redirect()->to('/');
    }
}
