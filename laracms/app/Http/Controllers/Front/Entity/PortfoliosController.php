<?php

namespace Eve\Http\Controllers\Front\Entity;

use Eve\Http\Controllers\Front\Base\AppFrontController;

use Eve\Models\Portfolio;

class PortfoliosController extends AppFrontController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Portfolio
	{
		return Portfolio::create();
	}

}
