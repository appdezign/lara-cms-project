<?php

namespace Eve\Http\Controllers\Front\Entity;

use Eve\Http\Controllers\Front\Base\AppFrontController;

use Eve\Models\Story;

class StoriesController extends AppFrontController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Story
	{
		return Story::create();
	}

}
