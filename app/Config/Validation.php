<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;
use App\Validation\MyRules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
        MyRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list' => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------

    public $errorMessage = array(
        'required' => '{field} harus diisi',
        'valid_email' => 'format email tidak sesuai',
        'matches' => '{field} tidak sama',
        'is_unique' => '{field} sudah ada',
        'numeric' => '{field} harus angka',
        'min_length' => '{field} harus {param} karakter',
        'alpha_space' => '{field} harus huruf dan spasi',
    );

    public $daftar = [
        'nama' => [
            'label' => 'Nama',
            'rules' => 'required|string|regex_match[/^08\d{9,12}$/]',
            'errors' => [
                'required' => '{field} harus diisi',
                'alpha_numeric_punct' => '{field} harus huruf, spasi dan simbol',
            ],
        ],
        'email' => [
            'label' => 'Email',
            'rules' => 'required|is_unique[m_user.user_email]|valid_email',
            'errors' => [
                'required' => '{field} harus diisi',
                'is_unique' => '{field} sudah ada',
                'valid_email' => 'Format email tidak sesuai',
            ],
        ],
        'username' => [
            'label' => 'Username',
            'rules' => 'required|is_unique[m_user.user_username]|alpha_numeric',
            'errors' => [
                'required' => '{field} harus diisi',
                'is_unique' => '{field} sudah ada',
            ],
        ],
        'password' => [
            'label' => 'Password',
            'rules' => 'required|min_length[3]',
            'errors' => [
                'required' => '{field} harus diisi',
                'min_length' => '{field} harus {param} karakter',
            ],
        ],
        'pass_confirm' => [
            'label' => 'Konfirmasi Password',
            'rules' => 'required|matches[password]',
            'errors' => [
                'required' => '{field} harus diisi',
                'matches' => '{field} tidak sama dengan {param}',
            ],
        ],
        'jenis_kelamin' => [
            'label' => 'Jenis kelamin',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} harus dipilih',
            ],
        ],
        'alamat' => [
            'label' => 'Alamat',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} harus diisi',
            ],
        ],
        'noHp' => [
            'label' => 'No HP',
            'rules' => 'required|numeric|min_length[11]|regex_match[/^08\d{9,12}$/]',
            'errors' => [
                'required' => '{field} harus diisi',
                'numeric' => '{field} harus angka',
                'min_length' => '{field} harus {param} karakter',
                'regex_match' => 'format {field} tidak sesuai',
            ],
        ],
//        'foto_profile' => [
//            'label' => 'Foto profile',
//            'rules' => 'required|uploaded[foto_profile]|is_image[foto_profile]|max_size[avatar,1024]',
//            'errors' => [
//                'required' => '{field} harus diupload',
//            ]
//        ],
        'konfirmasi' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Harap ceklis untuk melanjutkan',
            ],
        ],
    ];

    public $masuk = [
        'username' => [
            'rules' => 'required|checkAccount',
            'label' => 'Username',
            'errors' => [
                'required' => 'Harap masukkan {field}',
                'is_not_unique' => '{field} tidak terdaftar',
            ],
        ],
        'password' => [
            'rules' => 'required',
            'label' => 'Password',
            'errors' => [
                'required' => 'Harap masukkan {field}',
            ],
        ],
    ];
}
