<?php

namespace App\Controllers\Siswa;

class Feedback extends \App\Controllers\BaseController

{
    protected $data;

    /**
     * Absensi constructor.
     */
    public function __construct()
    {
        $this->data['page'] = 'Feed Back';
    }

    public function index()
    {
        $this->data['title'] = 'FeedBack';
        return view('siswa/feedback', $this->data);
    }
}
