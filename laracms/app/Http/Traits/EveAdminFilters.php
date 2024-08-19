<?php

namespace Eve\Http\Traits;

trait EveAdminFilters
{
	private function customAdminEntityFilter($entity, $collection) {

		// Add custom filters here ...

		return $collection;

	}

}