<?php

namespace Eve\Http\Controllers\Admin\Entity;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Team;

class TeamsController extends BaseController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Team
	{
		return Team::create();
	}

}
