<?php


namespace App\Controllers\Pembimbing;

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
            'role' => 'pembimbing'
        );
    }

    public function index()
    {
        $this->data['title'] = 'Dashboard';
        return view('pembimbing/index', $this->data);
    }
}