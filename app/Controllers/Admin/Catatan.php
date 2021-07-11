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
        $this->data['page'] = 'Catatan';
    }

    public function index()
    {
        $this->data['title'] = 'Catatan';
        return view('admin/catatan/index', $this->data);
    }
}
