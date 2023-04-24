<?php

namespace Archetype\Users\Presentation\Controller;

use Archetype\Shared\Presentation\Controller\Controller;

class UserController extends Controller
{
    private $input;

    public function create() 
    {
        return $this->view('Users', 'create-user');
    }

    public function store($input) 
    {
        echo "Chegou aqui";
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