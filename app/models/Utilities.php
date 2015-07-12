<?php

/**
 * Utilities
 *
 * @property integer $ID
 * @property integer $type
 * @property integer $project
 * @property string $image
 * @property string $description
 * @method static \Illuminate\Database\Query\Builder|\Utilities whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\Utilities whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\Utilities whereProject($value)
 * @method static \Illuminate\Database\Query\Builder|\Utilities whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\Utilities whereDescription($value)
 */
class Utilities extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	public $timestamps = false;
	protected $primaryKey = 'ID';
}
