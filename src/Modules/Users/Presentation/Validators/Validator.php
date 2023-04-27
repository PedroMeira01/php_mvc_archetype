<?php

namespace Archetype\Users\Presentation\Validators;

class Validators 
{
    private $errors = [];

    public function addErrors(string $field, string $message)
    {
        $this->errors[$field][] = $message;
    }

    public function hasErrors()
    {
        return !empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }
}