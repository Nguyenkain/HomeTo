<?php

/**
 * Feedback
 *
 * @property integer $ID
 * @property string $email
 * @property string $content
 * @property string $created_date
 * @method static \Illuminate\Database\Query\Builder|\Feedback whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\Feedback whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Feedback whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\Feedback whereCreatedDate($value)
 */
class Feedback extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	protected $table = 'feedback';
}
