<?php

namespace Eve\Http\Controllers\Admin\Entity;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Story;

class StoriesController extends BaseController
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
