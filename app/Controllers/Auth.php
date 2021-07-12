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
            return redirect()->to('/')->with('validation', $this->validation);
        }

        if (isset($post['masuk'])) {
            $user = $this->userModel->getUser($post['username']);
            if ($user) {
                if (password_verify($post['password'], $user['user_password'])) {
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
        return redirect()->to('/');
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
                'username' => $post['username'],
                'email' => $post['email'],
                'password' => password_hash($post['password'], PASSWORD_DEFAULT),
                'jenisKelamin' => $post['jenis_kelamin'],
                'noHp' => $post['noHp'],
                'alamat' => $post['alamat'],
                'foto' => $this->request->getFile('foto_profile'),
            );
            $id_user = $this->userModel->createUserAdmin($data);
            $data['userid'] = $id_user;

            if (!$this->profileModel->createProfile($data)) {
                session()->setFlashdata('pesan', 'Akun gagal dibuat');
                return redirect()->to('/');
            }
            session()->setFlashdata('pesan', 'Akun berhasil dibuat');
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
