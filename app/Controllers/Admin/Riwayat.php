<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Riwayat extends BaseController
{
    protected $data;
    /**
     * Riwayat constructor.
     */
    public function __construct()
    {
        $this->data['page'] = 'Riwayat';
    }

    public function index()
    {
        $this->data['title'] = 'Riwayat';
        return view('admin/riwayat/index', $this->data);
    }
}
