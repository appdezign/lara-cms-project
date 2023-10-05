<?php

namespace Eve\Http\Controllers\Admin\Entity;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Location;

class LocationsController extends BaseController
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
