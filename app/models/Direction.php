<?php

/**
 * Direction
 *
 * @property integer $ID
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\Direction whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\Direction whereName($value)
 */
class Direction extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	protected $table = 'direction';
}
