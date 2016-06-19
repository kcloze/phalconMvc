<?php

namespace MyApp\Controllers;

use MyApp\Controllers\ControllerBase;

class TestController extends ControllerBase
{

    public function indexAction()
    {

        $this->view->setVar("title", "phalcon template");
        //echo $this->view->render('test/index');

    }

}
