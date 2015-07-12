<?php

/**
 * Investor
 *
 * @property integer $ID
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\Investor whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\Investor whereName($value)
 */
class Investor extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	protected $table = 'investor';
	public $timestamps = false;
	protected $primaryKey = 'ID';
}
