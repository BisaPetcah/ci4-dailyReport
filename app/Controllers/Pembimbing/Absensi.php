<?php

namespace App\Controllers\Pembimbing;

class Absensi extends \App\Controllers\BaseController

{
    protected $data;

    /**
     * Absensi constructor.
     */
    public function __construct()
    {
        $this->data['page'] = 'Absensi';
    }

    public function index()
    {
        $this->data['title'] = 'Absensi';
        return view('pembimbing/absensi/index', $this->data);
    }
}
