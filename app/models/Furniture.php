<?php

/**
 * Furniture
 *
 * @property integer $ID
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\Furniture whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\Furniture whereName($value)
 */
class Furniture extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	protected $table = 'furniture';
}
