<?php

/**
 * ManagementComapny
 *
 * @property integer $ID
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\ManagementComapny whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\ManagementComapny whereName($value)
 */
class ManagementComapny extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	protected $table = 'management_company';
	protected $primaryKey = 'ID';
	public $timestamps = false;
}
