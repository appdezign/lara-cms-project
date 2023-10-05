<?php

namespace Eve\Http\Controllers\Front\Entity;

use Eve\Http\Controllers\Front\Base\AppFrontController;

use Eve\Models\Event;

class EventsController extends AppFrontController
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
