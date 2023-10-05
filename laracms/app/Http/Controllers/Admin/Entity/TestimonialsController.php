<?php

namespace Eve\Http\Controllers\Admin\Entity;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Testimonial;

class TestimonialsController extends BaseController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Testimonial
	{
		return Testimonial::create();
	}

}
