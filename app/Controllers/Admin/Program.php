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
        $this->data['page'] = 'Program';
    }

    public function index()
    {
        $this->data['title'] = 'Program';
        return view('admin/program/index', $this->data);
    }
}
