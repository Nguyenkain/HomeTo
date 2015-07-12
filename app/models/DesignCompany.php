<?php

/**
 * DesignCompany
 *
 * @property integer $ID
 * @property string $name
 * @method static \Illuminate\Database\Query\Builder|\DesignCompany whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\DesignCompany whereName($value)
 */
class DesignCompany extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	protected $table = 'design_company';
	public $timestamps = false;
	protected $primaryKey = 'ID';
}
