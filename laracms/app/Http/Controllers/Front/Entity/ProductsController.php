<?php

namespace Eve\Http\Controllers\Front\Entity;

use Eve\Http\Controllers\Front\Base\AppFrontController;

use Eve\Models\Product;

class ProductsController extends AppFrontController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Product
	{
		return Product::create();
	}

}
