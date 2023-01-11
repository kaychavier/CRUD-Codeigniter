<?php

namespace App\Validation;

class PersonValidation
{
    public const RULES = [
        'name'=> 'required|string|max_length[255]',
        'phone'=> 'required|string|max_length[255]',
        'address'=> 'required|string|max_length[255]',
        'email'=> 'required|string|valid_email|max_length[255]'
    ];
}
