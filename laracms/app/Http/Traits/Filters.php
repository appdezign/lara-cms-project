<?php

namespace Eve\Http\Traits;

trait Filters
{
	private function customAdminEntityFilter($entity, $collection) {

		// Add custom filters here ...

		return $collection;

	}

}