<?php

/**
 * FloorMaterial
 *
 * @property integer $ID
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\FloorMaterial whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\FloorMaterial whereName($value)
 */
class FloorMaterial extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	protected $table = 'floor_material';
}
