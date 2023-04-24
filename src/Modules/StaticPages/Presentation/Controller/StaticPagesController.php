<?php

namespace Archetype\StaticPages\Presentation\Controller;

use Archetype\Shared\Presentation\Controller\Controller;

class StaticPagesController extends Controller 
{
    public function showHome()
    {
        return $this->view('StaticPages', 'home');
    }
}