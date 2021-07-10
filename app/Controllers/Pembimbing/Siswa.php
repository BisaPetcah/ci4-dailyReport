<?php


namespace App\Controllers\Pembimbing;


use App\Controllers\BaseController;

class Siswa extends BaseController
{
    protected $data;

    /**
     * Siswa constructor.
     */
    public function __construct()
    {
        $this->data = array(
            'page' => 'Siswa',
            'name' => 'Arief Yusuf Winata',
            'photoProfile' => '/images/faces/face3.jpg',
            'role' => 'pembimbing'
        );
    }


    public function index()
    {
        $user = $this->userModel->getUser('yazid@gmail.com');
        dd($user);
        $this->data['title'] = 'Siswa';
        return view('pembimbing/siswa/index', $this->data);
    }

    public function tambah()
    {
        $this->data['title'] = 'Tambah Siswa';
        return view('pembimbing/siswa/tambah', $this->data);
    }
}