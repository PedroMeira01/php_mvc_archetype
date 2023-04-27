<?php

namespace Archetype\Users\Presentation\Validators;

use Archetype\Users\Presentation\Validators\Validator;

class CreateUserValidator 
{
    private $validator;

    public static function validate($input)
    {
        $validator = new Validator();

        if (!filter_var($input['name'], FILTER_SANITIZE_STRING)) {
            $validator->addErrors('name', 'O campo nome é obrigatório');
        }

        if (!filter_var($input['email'], FILTER_SANITIZE_EMAIL)) {
            $validator->addErrors('email', 'O campo e-mail é obrigatório');
        }

        if (strlen($input['password']) < 6) {
            $validator->addErrors('password', 'O campo senha é obrigatório');
        }

        return $validator;
    }
}