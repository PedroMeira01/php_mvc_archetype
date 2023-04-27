<?php

namespace Archetype\Users\Presentation\Controller;

use Archetype\Shared\Presentation\Controller\Controller;
use Archetype\Users\Presentation\Validators\CreateUserValidator;

class UserController extends Controller
{

    public function create() 
    {
        return $this->view('Users', 'create-user');
    }

    public function store($request) 
    {
        $validation = CreateUserValidator::validate($request);

        if ($validation->hasErrors()) {
           return $this->view('Users', 'create-user', ['errors' => $validator->getErrors()]);
        }
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function find()
    {

    }

    public function findAll()
    {

    }

    public function delete()
    {

    }
}