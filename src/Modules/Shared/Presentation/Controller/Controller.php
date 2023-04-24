<?php

namespace Archetype\Shared\Presentation\Controller;

class Controller {
    public function view($module, $view, $data = []) 
    {
        extract($data);
        
        ob_start();
        require_once __DIR__ . '/../../../'. $module . '/Presentation/View/' . $view . '.php';
        $content = ob_get_contents();
        
        ob_end_flush();
    }

    function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }
}