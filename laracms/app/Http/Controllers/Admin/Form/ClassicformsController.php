<?php

namespace Eve\Http\Controllers\Admin\Form;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Classicform;

class ClassicformsController extends BaseController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Classicform
	{
		return Classicform::create();
	}

}
