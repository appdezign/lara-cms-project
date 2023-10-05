<?php

namespace Eve\Http\Controllers\Admin\Entity;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Doc;

class DocsController extends BaseController
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
