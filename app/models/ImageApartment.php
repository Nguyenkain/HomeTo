<?php

/**
 * ImageApartment
 *
 * @property integer $ID
 * @property integer $apartment
 * @property integer $type
 * @property string $image
 * @property string $description
 * @method static \Illuminate\Database\Query\Builder|\ImageApartment whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\ImageApartment whereApartment($value)
 * @method static \Illuminate\Database\Query\Builder|\ImageApartment whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\ImageApartment whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\ImageApartment whereDescription($value)
 */
class ImageApartment extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	protected $table = 'image_apartment';

	public $timestamps = false;

	protected $primaryKey = 'ID';
}
