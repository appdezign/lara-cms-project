<?php

namespace Eve\Http\Controllers\Front\Entity;

use Eve\Http\Controllers\Front\Base\AppFrontController;

use Eve\Models\Video;

class VideosController extends AppFrontController
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
