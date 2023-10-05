<?php

namespace Eve\Http\Controllers\Admin\Entity;

use Lara\Admin\Http\Controllers\Base\BaseController;

use Eve\Models\Event;

class EventsController extends BaseController
{

	public function __construct()
	{
		parent::__construct();
	}

	protected function make(): Event
	{
		return Event::create();
	}

}
