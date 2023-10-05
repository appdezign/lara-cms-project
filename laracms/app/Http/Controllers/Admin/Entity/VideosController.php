<?php

namespace Eve\Http\Controllers\Admin\Entity;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Video;

class VideosController extends BaseController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Video
	{
		return Video::create();
	}

}
