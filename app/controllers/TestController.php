<?php

namespace MyApp\Controllers;

use MyApp\Controllers\ControllerBase;

class TestController extends ControllerBase {

	public function indexAction() {
		// $this->logger->critical("This is a critical message");
		// $counters = new Counters();
		// $result = $counters->getByQuery();
		// foreach ($result as $value) {
		// 	var_dump($value->id);
		// 	var_dump($value->name);
		// 	var_dump($value->value);
		// }

		// $result = $counters->getByQueryBuilder();
		// foreach ($result as $value) {
		// 	var_dump($value->id);
		// 	var_dump($value->name);
		// 	var_dump($value->value);
		// }
		// $counters->findOrm();
		echo 'test';
		exit;
	}

}
