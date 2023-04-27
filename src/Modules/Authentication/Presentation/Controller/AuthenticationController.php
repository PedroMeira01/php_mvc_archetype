<?php

namespace Archetype\Authentication\Presentation\Controller;

use Archetype\Shared\Presentation\Controller\Controller;

class AuthenticationController extends Controller 
{
    public function login()
    {
        return $this->view('Authentication', 'login');
    }
}