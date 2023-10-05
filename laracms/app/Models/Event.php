<?php

namespace Eve\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Lara\Common\Models\EntityBaseModel;

use Cviebrock\EloquentSluggable\Sluggable;

use Carbon\Carbon;

class Event extends EntityBaseModel
{

	use Sluggable;

	/**
	 * @var string
	 */
	protected $table = 'lara_content_events';

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
		return $this->belongsTo('Eve\Models\Event', 'language_parent');
	}

	/**
	 * @return HasMany
	 */
	public function languageChildren()
	{
		return $this->hasMany('Eve\Models\Event', 'language_parent');
	}

	public function location()
	{
		return $this->belongsTo('Eve\Models\Location', 'location_id');
	}

	public function setStartdateAttribute($date)
	{
		$this->attributes['startdate'] = Carbon::parse($date);
	}

	public function setStarttimeAttribute($date)
	{
		$this->attributes['starttime'] = Carbon::parse($date);
	}

	public function setEnddateAttribute($date)
	{
		$this->attributes['enddate'] = Carbon::parse($date);
	}

	public function setEndtimeAttribute($date)
	{
		$this->attributes['endtime'] = Carbon::parse($date);
	}

	public function scopeFront($query) {
		return $query->where('startdate', '>=', Carbon::today());
	}

}

