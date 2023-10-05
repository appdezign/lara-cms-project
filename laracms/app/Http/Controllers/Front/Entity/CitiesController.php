<?php

namespace Eve\Http\Controllers\Front\Entity;

use Eve\Http\Controllers\Front\Base\AppFrontController;

use Eve\Models\City;

class CitiesController extends AppFrontController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): City
	{
		return City::create();
	}

}
