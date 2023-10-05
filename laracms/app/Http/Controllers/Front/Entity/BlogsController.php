<?php

namespace Eve\Http\Controllers\Front\Entity;

use Eve\Http\Controllers\Front\Base\AppFrontController;

use Eve\Models\Blog;

class BlogsController extends AppFrontController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Blog
	{
		return Blog::create();
	}

}
