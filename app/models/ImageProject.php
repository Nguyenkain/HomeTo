<?php

/**
 * ImageProject
 *
 * @property integer $ID
 * @property integer $project
 * @property integer $type
 * @property string $image
 * @property string $description
 * @method static \Illuminate\Database\Query\Builder|\ImageProject whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\ImageProject whereProject($value)
 * @method static \Illuminate\Database\Query\Builder|\ImageProject whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\ImageProject whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\ImageProject whereDescription($value)
 */
class ImageProject extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	public $timestamps = false;
	protected $table = 'image_project';
	protected $primaryKey = 'ID';
}
