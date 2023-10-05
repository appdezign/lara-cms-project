<?php

namespace Eve\Http\Controllers\Front\Entity;

use Eve\Http\Controllers\Front\Base\AppFrontController;

use Eve\Models\Location;

class LocationsController extends AppFrontController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Location
	{
		return Location::create();
	}

}
