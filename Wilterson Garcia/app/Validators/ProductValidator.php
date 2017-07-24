<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class ProductValidator extends LaravelValidator
{

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name'  => 'required',
            'sku'   => 'required',
            'price' => 'required',
            'description'   => 'required',
            'image' => 'required',
        ],

        ValidatorInterface::RULE_UPDATE => [],
   ];
}
