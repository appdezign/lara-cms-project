<?php

namespace Eve\Http\Controllers\Admin\Form;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Contactform;

class ContactformsController extends BaseController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Contactform
	{
		return Contactform::create();
	}

}
