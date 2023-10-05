<?php

namespace Eve\Http\Controllers\Admin\Entity;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Sponsor;

class SponsorsController extends BaseController
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
