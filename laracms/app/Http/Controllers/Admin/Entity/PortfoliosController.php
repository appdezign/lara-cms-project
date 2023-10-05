<?php

namespace Eve\Http\Controllers\Admin\Entity;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Portfolio;

class PortfoliosController extends BaseController
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
