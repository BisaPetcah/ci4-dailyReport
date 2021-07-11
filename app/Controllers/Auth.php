<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        $data = array(
            'validation' => $this->validation,
        );
        return view('login', $data);
    }

    public function proses_login()
    {
        $post = $this->request->getVar();

        if (!$this->validate($this->validation->getRuleGroup('masuk'))) {
            return redirect()->to('/')->withInput()->with('validation', $this->validation);
        }

        if (isset($post['masuk'])) {
            $user = $this->userModel->getUser($post['username']);
            if ($user) {
                if ($post['password'] == $user['user_password']) {
                    $data = array(
                        'user_id' => $user['user_id'],
                        'profile_name' => $user['profile_nama'],
                        'role_name' => role($user['user_roleid']),
                        'profile_foto' => $user['profile_foto'],
                        'login' => true,
                    );
                    session()->set($data);
                    return redirect()->to('/' . $data['role_name']);
                }
            }
        }
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

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
