<?php

/**
 * ListDistrict
 *
 * @property integer $id_district
 * @property integer $id_province
 * @property string $name_district
 * @method static \Illuminate\Database\Query\Builder|\ListDistrict whereIdDistrict($value)
 * @method static \Illuminate\Database\Query\Builder|\ListDistrict whereIdProvince($value)
 * @method static \Illuminate\Database\Query\Builder|\ListDistrict whereNameDistrict($value)
 */
class ListDistrict extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	protected $table = 'list_district';
}
