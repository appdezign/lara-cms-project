<?php

namespace Eve\Http\Controllers\Front\Api;

use Lara\Front\Http\Controllers\Api\Base\BaseApiController;

use Eve\Models\Blog;

class BlogsController extends BaseApiController
{

	public function __construct() {
		parent::__construct();
	}

	protected function make(): Blog {
		return Blog::create();
	}

}
