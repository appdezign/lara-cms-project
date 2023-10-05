<?php

namespace Eve\Http\Controllers\Front\Entity;

use Eve\Http\Controllers\Front\Base\AppFrontController;

use Eve\Models\Doc;

class DocsController extends AppFrontController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Doc
	{
		return Doc::create();
	}

}
