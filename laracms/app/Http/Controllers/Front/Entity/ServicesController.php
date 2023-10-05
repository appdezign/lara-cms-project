<?php

namespace Eve\Http\Controllers\Front\Entity;

use Eve\Http\Controllers\Front\Base\AppFrontController;

use Eve\Models\Service;

class ServicesController extends AppFrontController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Service
	{
		return Service::create();
	}

}
