<?php

namespace Eve\Http\Controllers\Admin\Entity;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Gallery;

class GalleriesController extends BaseController
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
