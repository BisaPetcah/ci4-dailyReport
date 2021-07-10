<?php


namespace App\Controllers\Admin;


class Catatan extends \App\Controllers\BaseController
{
    protected $data;
    /**
     * Catatan constructor.
     */
    public function __construct()
    {
        $this->data = array(
            'page' => 'Catatan',
            'name' => 'Arief Yusuf Winata',
            'photoProfile' => '/images/faces/face3.jpg',
            'role' => 'admin'
        );
    }

    public function index()
    {
        $this->data['title'] = 'Catatan';
        return view('admin/catatan/index', $this->data);
    }
}