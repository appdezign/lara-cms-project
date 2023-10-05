<?php

namespace Eve\Models;

use Lara\Common\Models\EntityBaseModel;

use Cviebrock\EloquentSluggable\Sluggable;

use Carbon\Carbon;

class Classicform extends EntityBaseModel
{

	use Sluggable;

	/**
	 * @var string
	 */
	protected $table = 'lara_form_classicforms';

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

	/**
	 * @return array
	 */
	public function sluggable(): array
	{
		return [
			'slug' => [
				'source' => 'title',
			],
		];
	}

	public function setMydateAttribute($date)
	{
		$this->attributes['mydate'] = Carbon::parse($date);
	}
}
