<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;

class Pembimbing extends BaseController
{
    protected $data;

    /**
     * Pembimbing constructor.
     */
    public function __construct()
    {
        $this->data = array(
            'page' => 'Pembimbing',
            'name' => 'Arief Yusuf Winata',
            'photoProfile' => '/images/faces/face3.jpg',
            'role' => 'admin'
        );
    }

    public function index()
    {
        $this->data['title'] = 'Pembimbing';
        return view('admin/pembimbing/index', $this->data);
    }

    public function tambah()
    {
        $this->data['title'] = 'Tambah Pembimbing';
        return view('admin/pembimbing/tambah', $this->data);
    }
}