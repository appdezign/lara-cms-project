<?php

namespace Eve\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Lara\Common\Models\EntityBaseModel;

use Cviebrock\EloquentSluggable\Sluggable;

use Rutorika\Sortable\SortableTrait;

use Carbon\Carbon;

class Story extends EntityBaseModel
{

	use Sluggable;

	use SortableTrait;

	/**
	 * @var string
	 */
	protected $table = 'lara_content_stories';

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
		return $this->belongsTo('Eve\Models\Story', 'language_parent');
	}

	/**
	 * @return HasMany
	 */
	public function languageChildren()
	{
		return $this->hasMany('Eve\Models\Story', 'language_parent');
	}

}
