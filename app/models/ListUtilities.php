<?php

/**
 * ListUtilities
 *
 * @property integer $ID
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\ListUtilities whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\ListUtilities whereName($value)
 */
class ListUtilities extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	protected $table = 'list_utilities';
}
