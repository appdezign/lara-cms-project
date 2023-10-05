<?php

namespace Eve\Http\Controllers\Front\Entity;

use Eve\Http\Controllers\Front\Base\AppFrontController;

use Eve\Models\Testimonial;

class TestimonialsController extends AppFrontController
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
