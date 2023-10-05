<?php

namespace Eve\Http\Controllers\Admin\Entity;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Blog;

class BlogsController extends BaseController
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
