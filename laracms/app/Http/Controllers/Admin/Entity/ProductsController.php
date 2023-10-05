<?php

namespace Eve\Http\Controllers\Admin\Entity;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Product;

class ProductsController extends BaseController
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
