<?php

/**
 * ReasonReport
 *
 * @property integer $ID
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\ReasonReport whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\ReasonReport whereName($value)
 */
class ReasonReport extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	protected $table = 'reason_report';
}
