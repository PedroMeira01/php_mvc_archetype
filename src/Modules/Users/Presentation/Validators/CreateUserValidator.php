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
            $validator->addErrors('password', 'A senha deve ter ao menos 6 digitos');
        }

        if ($input['password'] !== $input['confirmPassword']) {
            $validator->addErrors('password', 'As senhas não coincidem');
            $validator->addErrors('confirmPassword', 'As senhas não coincidem');
        }

        return $validator;
    }
}