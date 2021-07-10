<?php


namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    protected $data;

    /**
     * Dashboard constructor.
     */
    public function __construct()
    {
        $this->data = array(
            'page' => 'dashboard',
            'name' => 'Arief Yusuf Winata',
            'photoProfile' => '/images/faces/face3.jpg',
            'role' => 'admin'
        );
    }

    public function index()
    {
        $this->data['title'] = 'Dashboard';
        return view('admin/index', $this->data);
    }
}