<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\Rules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\CreditCardRules;

class Validation extends BaseConfig
{
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    public $register = [
        'username' => 'required|min_length[3]|max_length[20]',
        'email'    => 'required|valid_email|is_unique[usuarios.email]',
        'password' => 'required|min_length[8]',
    ];
}

