<?php


namespace App\Controllers\Admin;


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
            'role' => 'admin'
        );
    }

    public function index()
    {
        $this->data['title'] = 'Program';
        return view('admin/program/index', $this->data);
    }
}