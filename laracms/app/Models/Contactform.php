<?php

namespace Eve\Models;

use Lara\Common\Models\EntityBaseModel;

use Carbon\Carbon;

class Contactform extends EntityBaseModel
{

	/**
	 * @var string
	 */
	protected $table = 'lara_form_contactforms';

	/**
	* @var array
	*/
	protected $guarded = [
		'id',
		'created_at',
		'updated_at',
		'deleted_at',
	];

	public function __construct(array $attributes = [])
	{
		parent::__construct($attributes);
	}

}
