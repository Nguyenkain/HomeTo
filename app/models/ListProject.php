<?php

/**
 * ListProject
 *
 * @property integer $ID
 * @property string $name
 * @property integer $province
 * @property integer $district
 * @property integer $management_company
 * @property integer $management_fee
 * @property integer $oto_fee
 * @property string $cable_tv
 * @property string $internet
 * @property string $gas
 * @property string $address
 * @property float $latitude
 * @property float $longitude
 * @property integer $investor
 * @property integer $design_company
 * @property string $number_floors
 * @property integer $total_area
 * @property string $apartment_types
 * @property integer $transfer_year
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereID( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereName( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereProvince( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereDistrict( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereManagementCompany( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereManagementFee( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereOtoFee( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereCableTv( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereInternet( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereGas( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereAddress( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereLatitude( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereLongitude( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereInvestor( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereDesignCompany( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereNumberFloors( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereTotalArea( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereApartmentTypes( $value )
 * @method static \Illuminate\Database\Query\Builder|\ListProject whereTransferYear( $value )
 */
class ListProject extends \LaravelBook\Ardent\Ardent {
	protected $guarded = array( 'id', 'management_company_new', 'investor_new', 'design_company_new' );
	protected $table = 'list_project';
	public $timestamps = false;

	protected $primaryKey = 'ID';

	public static $rules = array(
		'name'            => 'required|max:1000',
		'cable_tv'        => 'required|max:1000',
		'internet'        => 'required|max:1000',
		'gas'             => 'required|max:1000',
		'address'         => 'required|max:1000',
		'apartment_types' => 'required|max:1000',
		'management_fee'  => 'required|numeric',
		'oto_fee'         => 'required|numeric',
		'number_floors'   => 'required|numeric',
		'total_area'      => 'required|numeric',
		'transfer_year'   => 'required|numeric',
	);

	public function getNewId()
	{
		$project = ListProject::orderBy( 'ID', 'desc' )->first();

		return $project->ID + 1;
	}
}
