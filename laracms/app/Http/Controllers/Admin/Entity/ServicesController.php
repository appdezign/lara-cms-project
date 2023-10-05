<?php

namespace Eve\Http\Controllers\Admin\Entity;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Service;

class ServicesController extends BaseController
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
