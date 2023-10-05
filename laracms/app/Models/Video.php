<?php

namespace Eve\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Lara\Common\Models\EntityBaseModel;

use Cviebrock\EloquentSluggable\Sluggable;

use Carbon\Carbon;

class Video extends EntityBaseModel
{

	use Sluggable;

	/**
	 * @var string
	 */
	protected $table = 'lara_content_videos';

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

	/**
	 * @return BelongsTo
	 */
	public function languageParent()
	{
		return $this->belongsTo('Eve\Models\Video', 'language_parent');
	}

	/**
	 * @return HasMany
	 */
	public function languageChildren()
	{
		return $this->hasMany('Eve\Models\Video', 'language_parent');
	}

}
