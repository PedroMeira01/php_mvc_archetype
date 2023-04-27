<?php

namespace Archetype\Users\Presentation\Controller;

use Archetype\Shared\Presentation\Controller\Controller;
use Archetype\Users\Application\UseCases\DTO\InputStoreUserDTO;
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
            return $this->view('Users', 'create-user', [
                'errors' => $validation->getErrors(),
                'formData' => $request
            ]);
        }

        extract($request);

        $inputStoreUserDTO = new InputStoreUserDTO($name, $email, $password);
        $createUserUseCase = new CreateUserUseCase();
        $createUserUseCase->execute($inputStoreUserDTO);
        
        return $this->redirect('/login');
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