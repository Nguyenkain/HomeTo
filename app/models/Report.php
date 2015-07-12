<?php

/**
 * Report
 *
 * @property integer $ID
 * @property integer $target_id
 * @property integer $target_type
 * @property string $email
 * @property integer $reason
 * @property string $content
 * @method static \Illuminate\Database\Query\Builder|\Report whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\Report whereTargetId($value)
 * @method static \Illuminate\Database\Query\Builder|\Report whereTargetType($value)
 * @method static \Illuminate\Database\Query\Builder|\Report whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Report whereReason($value)
 * @method static \Illuminate\Database\Query\Builder|\Report whereContent($value)
 */
class Report extends \LaravelBook\Ardent\Ardent {
	protected $fillable = [];
	protected $table = 'report';
}
