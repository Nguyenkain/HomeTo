<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * User
 *
 * @property integer $id
 * @property integer $user_type
 * @property string $first_name
 * @property string $last_name
 * @property string $full_name
 * @property string $username
 * @property string $email
 * @property string $gcm_regid
 * @property string $apn_regid
 * @property string $password_hash
 * @property string $api_key
 * @property string $image
 * @property string $cover_image
 * @property string $gender
 * @property string $birth_date
 * @property string $address
 * @property string $city
 * @property string $country
 * @property string $state
 * @property string $zip
 * @property string $phone
 * @property string $active_key
 * @property string $salt
 * @property string $password_strategy
 * @property string $requires_new_password
 * @property string $timestamp
 * @property integer $last_seen
 * @property integer $os
 * @property-write mixed $password
 * @method static \Illuminate\Database\Query\Builder|\User whereId( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereUserType( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereFirstName( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereLastName( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereFullName( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereUsername( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereEmail( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereGcmRegid( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereApnRegid( $value )
 * @method static \Illuminate\Database\Query\Builder|\User wherePasswordHash( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereApiKey( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereImage( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereCoverImage( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereGender( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereBirthDate( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereAddress( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereCity( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereCountry( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereState( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereZip( $value )
 * @method static \Illuminate\Database\Query\Builder|\User wherePhone( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereActiveKey( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereSalt( $value )
 * @method static \Illuminate\Database\Query\Builder|\User wherePasswordStrategy( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereRequiresNewPassword( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereTimestamp( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereLastSeen( $value )
 * @method static \Illuminate\Database\Query\Builder|\User whereOs( $value )
 */
class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public $timestamps = false;


	/**
	 * Fillable Fields
	 *
	 * @var array
	 */
	protected $fillable = [
		'username',
		'email',
		'password_hash'
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array( 'password_hash', 'remember_token' );

	/**
	 * Hash password on set
	 *
	 * @param [type] $password [description]
	 */
	public function setPasswordAttribute( $value )
	{


		//$this->attributes['password_hash'] = Hash::make( $value );
		$this->attributes['password_hash'] = $this->generatePassword( $value );
	}

	/**
	 * Generate unique salt
	 * @return string
	 */
	private function unique_salt()
	{
		return substr( sha1( mt_rand() ), 0, 22 );
	}

	/**
	 * Generate hass pass
	 *
	 * @param $password
	 *
	 * @return string
	 */
	public function generatePassword( $password )
	{
		return md5($password);
	}

}
