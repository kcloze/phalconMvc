<?php

namespace MyApp\Controllers;

use MyApp\Controllers\ControllerBase;
use MyApp\Services\CountersService;

class IndexController extends ControllerBase
{

    public function indexAction()
    {

        $tile  = $this->request->get('title', 'string');
        $email = $this->request->get('email', 'email');
        $num   = $this->request->get('num', 'int');
        var_dump($tile, $email, $num);
        $countersService = new CountersService;
        $countersService->demo();
        //$countersService->getData();

        $this->view->disable();

    }

}
