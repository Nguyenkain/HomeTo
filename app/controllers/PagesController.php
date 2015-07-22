<?php

class PagesController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter( 'auth' );
		parent::__construct();

	}

	/**
	 * Index page
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function index()
	{
		// Get all project
		$projects = ListProject::lists( 'name', 'ID' );

		return View::make( 'pages.index', compact( 'projects' ) );
	}

	/**
	 * Add project page
	 * @return \Illuminate\View\View
	 */
	public function home()
	{
		$project = new ListProject();

		// Get all district
		$district = ListDistrict::lists( 'name_district', 'id_district' );

		// Get all province
		$province = ListProvice::lists( 'name_province', 'id_province' );

		// Get all management company
		$management_company = ManagementComapny::lists( 'name', 'ID' );

		// Get all investor
		$investor = Investor::lists( 'name', 'ID' );

		// Get all management company
		$design_company = DesignCompany::lists( 'name', 'ID' );

		// Get all utilities
		$utilities = ListUtilities::all();

		// Clear Session
		for ( $i = - 2; $i < 8; $i ++ ) {
			if ( Session::has( "image[{$i}]" ) ) {
				Session::remove( "image[{$i}]" );
			}
		}

		return View::make( 'pages.project', compact( 'project', 'district', 'province', 'management_company', 'investor', 'design_company', 'utilities' ) );
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

		$project = new ListProject();

		//Fill all value to model
		$project->fill( $inputs );

		// Add new management company
		if ( isset( $inputs['management_company_new'] ) && $inputs['management_company_new'] ) {
			$management       = new ManagementComapny();
			$management->name = $inputs['management_company_new'];
			if ( $management->save() ) {
				$project->management_company = $management->ID;
			}
		}

		// Add new investor
		if ( isset( $inputs['investor_new'] ) && $inputs['investor_new'] ) {
			$investor       = new Investor();
			$investor->name = $inputs['investor_new'];
			if ( $investor->save() ) {
				$project->investor = $investor->ID;
			}
		}

		// Add new design company
		if ( isset( $inputs['design_company_new'] ) && $inputs['design_company_new'] ) {
			$design_company       = new DesignCompany();
			$design_company->name = $inputs['design_company_new'];
			if ( $design_company->save() ) {
				$project->design_company = $design_company->ID;
			}
		}

		if ( $project->save() ) {

			//Save image project
			for ( $i = - 2; $i <= - 1; $i ++ ) {
				if ( Session::has( "image[{$i}]" ) ) {
					$image_arr = Session::get( "image[{$i}]" );
					foreach ( $image_arr as $image ) {
						$image_project              = new ImageProject();
						$image_project->project     = $project->ID;
						$image_project->type        = $i + 2;
						$image_project->image       = asset( sprintf( 'uploads/project_%s/%s', $this->_getTypeName( $i ), $image['image'] ) );
						$image_project->description = $image['caption'];
						$image_project->save();
					}
				}
			}

			//Save image utilities
			$utilities = ListUtilities::all();
			foreach ( $utilities as $utility ) {
				if ( Session::has( "image[{$utility->ID}]" ) ) {
					$image_arr = Session::get( "image[{$utility->ID}]" );
					foreach ( $image_arr as $image ) {
						$image_utility              = new Utilities();
						$image_utility->project     = $project->ID;
						$image_utility->type        = $utility->ID;
						$image_utility->image       = asset( sprintf( 'uploads/project_%s/%s', $this->_getTypeName( $utility->ID ), $image['image'] ) );
						$image_utility->description = $image['caption'];
						$image_utility->save();
					}
				}
			}
		} else {
			// Get validation errors (see Ardent package)
			$error = $project->validationErrors;

			return Redirect::back()->withErrors( $error )->withInput();
		}

		return Redirect::to( '/' )->with( 'success', "Thêm mới thành công" );
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
		$file->move( 'uploads/project_' . $this->_getTypeName( $type ), $file_name );

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
		} elseif ( $type ) {
			$type_name = "utilities{$type}";
		}

		return $type_name;
	}
}
