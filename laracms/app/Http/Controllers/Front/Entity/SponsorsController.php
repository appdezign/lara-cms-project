<?php

namespace Eve\Http\Controllers\Front\Entity;

use Eve\Http\Controllers\Front\Base\AppFrontController;

use Eve\Models\Sponsor;

class SponsorsController extends AppFrontController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Sponsor
	{
		return Sponsor::create();
	}

}
