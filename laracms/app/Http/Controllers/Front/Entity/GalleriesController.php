<?php

namespace Eve\Http\Controllers\Front\Entity;

use Eve\Http\Controllers\Front\Base\AppFrontController;

use Eve\Models\Gallery;

class GalleriesController extends AppFrontController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Gallery
	{
		return Gallery::create();
	}

}
