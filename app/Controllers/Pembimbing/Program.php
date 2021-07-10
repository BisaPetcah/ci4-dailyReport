<?php


namespace App\Controllers\Pembimbing;


class Program extends \App\Controllers\BaseController
{
    protected $data;

    /**
     * Program constructor.
     */
    public function __construct()
    {
        $this->data = array(
            'page' => 'Program',
            'name' => 'Arief Yusuf Winata',
            'photoProfile' => '/images/faces/face3.jpg',
            'role' => 'pembimbing'
        );
    }

    public function index()
    {
        $this->data['title'] = 'Program';
        return view('pembimbing/program/index', $this->data);
    }

    public function tambah()
    {
        $this->data['title'] = 'Tambah Program';
        return view('pembimbing/program/tambah', $this->data);
    }
}