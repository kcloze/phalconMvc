<?php

namespace MyApp\Controllers;

use MyApp\Controllers\ControllerBase;
use MyApp\Services\CountersService;

class IndexController extends ControllerBase
{

    public function indexAction()
    {

        $countersService = new CountersService;
        $countersService->getData();

        $this->view->disable();

    }

}
