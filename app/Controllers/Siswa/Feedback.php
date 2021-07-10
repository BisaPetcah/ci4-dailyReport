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
        $this->data = array(
            'page' => 'Feedback',
            'name' => 'Arief Yusuf Winata',
            'photoProfile' => '/images/faces/face3.jpg',
            'role' => 'siswa'
        );
    }

    public function index()
    {
        $this->data['title'] = 'FeedBack';
        return view('siswa/feedback', $this->data);
    }
}