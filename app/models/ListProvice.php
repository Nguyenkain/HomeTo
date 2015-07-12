<?php

/**
 * ListProvice
 *
 * @property integer $id_province
 * @property string $name_province
 * @method static \Illuminate\Database\Query\Builder|\ListProvice whereIdProvince($value)
 * @method static \Illuminate\Database\Query\Builder|\ListProvice whereNameProvince($value)
 */
class ListProvice extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	protected $table = 'list_province';
}
