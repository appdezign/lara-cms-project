<?php

namespace Eve\Http\Controllers\Admin\Entity;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\City;

class CitiesController extends BaseController
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
