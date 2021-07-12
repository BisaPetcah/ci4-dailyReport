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
        $this->data['page'] = 'Dashboard';
    }

    public function index()
    {
        $this->data['title'] = 'Dashboard';
        return view('admin/index', $this->data);
    }
}
