<?php

/**
 * Bookmarks
 *
 * @property integer $id
 * @property integer $target_id
 * @property integer $target_type
 * @property string $username
 * @property string $created_date
 * @method static \Illuminate\Database\Query\Builder|\Bookmarks whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Bookmarks whereTargetId($value)
 * @method static \Illuminate\Database\Query\Builder|\Bookmarks whereTargetType($value)
 * @method static \Illuminate\Database\Query\Builder|\Bookmarks whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\Bookmarks whereCreatedDate($value)
 */
class Bookmarks extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
}
