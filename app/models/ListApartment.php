<?php

/**
 * ListApartment
 *
 * @property integer $ID
 * @property string $title
 * @property integer $province
 * @property integer $district
 * @property integer $project
 * @property string $description
 * @property string $code
 * @property integer $price_square
 * @property integer $price_total
 * @property integer $area
 * @property integer $furniture
 * @property integer $direction_door
 * @property integer $direction_balcony
 * @property integer $direction_side_balcony
 * @property integer $floor_material
 * @property integer $floor_number
 * @property string $block
 * @property integer $bedroom
 * @property integer $transfer_year
 * @property string $username
 * @property string $email
 * @property string $phone
 * @property string $created_date
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereID( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereTitle( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereProvince( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereDistrict( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereProject( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereDescription( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereCode( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment wherePriceSquare( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment wherePriceTotal( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereArea( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereFurniture( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereDirectionDoor( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereDirectionBalcony( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereDirectionSideBalcony( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereFloorMaterial( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereFloorNumber( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereBlock( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereBedroom( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereTransferYear( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereUsername( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereEmail( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment wherePhone( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListApartment whereCreatedDate( $value )
 */
class ListApartment extends \LaravelBook\Ardent\Ardent {
	protected $guarded = array( 'id' );
	protected $table = 'list_apartment';

	public $timestamps = false;

	protected $primaryKey = 'ID';

	public static $rules = array(
		'title'         => 'required|max:1000',
		'description'   => 'required|max:1000',
		'block'         => 'required|max:1000',
		'price_square'  => 'required|numeric',
		'price_total'   => 'required|numeric',
		'area'          => 'required|numeric',
		'floor_number'  => 'required|numeric',
		'bedroom'       => 'required|numeric',
		'transfer_year' => 'required|max:1000',
		'username'      => 'required|max:1000',
		'email'         => 'required|email',
	);
}
