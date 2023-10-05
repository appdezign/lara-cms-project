<?php

namespace Eve\Http\Controllers\Front\Entity;

use Eve\Http\Controllers\Front\Base\AppFrontController;

use Eve\Models\Team;

class TeamsController extends AppFrontController
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
