<?php

class ApartmentController extends \BaseController {

	public function __construct()
	{
		parent::__construct();

	}

	/**
	 * Add apartment page
	 * @return \Illuminate\View\View
	 */
	public function home()
	{
		$apartment = new ListApartment();

		//Hard code
		$apartment->username = "Test";

		// Get all district
		$district = ListDistrict::lists( 'name_district', 'id_district' );

		// Get all province
		$province = ListProvice::lists( 'name_province', 'id_province' );

		// Get all project
		$projects = ListProject::lists( 'name', 'ID' );

		//Get project
		$project_id = Input::get( 'project' );
		$apartment->project = $project_id;

		// Get all furniture
		$furnitures = Furniture::lists( 'name', 'ID' );

		// Get all management company
		$directions = Direction::lists( 'name', 'ID' );

		// Get all floor material
		$floor_materials = FloorMaterial::lists( 'name', 'ID' );

		// Clear Session
		for ( $i = - 2; $i < 8; $i ++ ) {
			if ( Session::has( "image[{$i}]" ) ) {
				Session::remove( "image[{$i}]" );
			}
		}

		return View::make( 'pages.apartment', compact( 'apartment', 'district', 'province', 'projects', 'project_id', 'furnitures', 'directions', 'floor_materials' ) );
	}


	/**
	 * Post project
	 * @return \Illuminate\View\View
	 */
	public function postHome()
	{
		$inputs = Input::all();
		//Remove some attribute
		unset( $inputs['_token'] );

		$apartment = new ListApartment();

		//Fill all value to model
		$apartment->fill( $inputs );

		if ( $apartment->save() ) {

			//Save image apartment
			for ( $i = - 2; $i <= - 1; $i ++ ) {
				if ( Session::has( "image[{$i}]" ) ) {
					$image_arr = Session::get( "image[{$i}]" );
					foreach ( $image_arr as $image ) {
						$image_apartment              = new ImageApartment();
						$image_apartment->apartment   = $apartment->ID;
						$image_apartment->type        = $i + 2;
						$image_apartment->image       = asset( sprintf( 'uploads/apartment_%s/%s', $this->_getTypeName( $i ), $image['image'] ) );
						$image_apartment->description = $image['caption'];
						$image_apartment->save();
					}
				}
			}
		} else {
			// Get validation errors (see Ardent package)
			$error = $apartment->validationErrors;

			return Redirect::back()->withErrors( $error )->withInput();
		}

		return Redirect::to( 'apartment' )->with( 'success', "Thêm mới thành công" );
	}

	/**
	 * Post image and upload image
	 */
	public function postProjectImageUpload()
	{
		#Get project id
		$id   = Input::get( "id" );
		$type = Input::get( "type" );

		#Move upload file
		$file      = Input::file( 'file' );
		$file_name = $file->getClientOriginalName();
		$file_name = preg_replace( '/\s+/', '', $file_name );
		$file->move( 'uploads/apartment_' . $this->_getTypeName( $type ), $file_name );

		//Store image to session
		$images_arr = Session::has( "image[{$type}]" ) ? Session::get( "image[{$type}]" ) : array();
		$image_item = array( 'image' => $file_name );
		array_push( $images_arr, $image_item );
		Session::set( "image[{$type}]", $images_arr );

		return $file_name;
	}

	/**
	 * Delete uploaded file
	 */
	public function postDeleteImage()
	{
		$file_name = Input::get( 'fileId' );
		$type      = Input::get( "type" );

		//Update to session
		$images_arr = Session::has( "image[{$type}]" ) ? Session::get( "image[{$type}]" ) : array();
		$del_idx    = 0;
		foreach ( $images_arr as $i => $image ) {
			if ( $image['image'] == $file_name ) {
				$del_idx = $i;
			}
		}

		//remove from session
		if ( $del_idx ) {
			unset( $images_arr[ $del_idx ] );
		}
		Session::set( "image[{$type}]", $images_arr );
	}

	/**
	 * Update file caption
	 */
	public function updateCaption()
	{
		$file_name = Input::get( 'fileId' );
		$type      = Input::get( "type" );
		$caption   = Input::get( "caption" );

		//Update to session
		$images_arr = Session::has( "image[{$type}]" ) ? Session::get( "image[{$type}]" ) : array();
		foreach ( $images_arr as $i => $image ) {
			if ( $image['image'] == $file_name ) {
				$images_arr[ $i ]['caption'] = $caption;
			}
		}
		Session::set( "image[{$type}]", $images_arr );
	}

	/**
	 * Get the type name
	 *
	 * @param $type
	 *
	 * @return string
	 */
	private function _getTypeName( $type )
	{
		$type_name = "";
		if ( $type == - 1 ) {
			$type_name = 'sight';
		} elseif ( $type == - 2 ) {
			$type_name = 'design';
		}

		return $type_name;
	}
}
