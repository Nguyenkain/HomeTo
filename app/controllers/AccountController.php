<?php

class AccountController extends AuthorizedController {
	/**
	 * Let's whitelist all the methods we want to allow guests to visit!
	 *
	 * @access   protected
	 * @var      array
	 */
	protected $whitelist = array(
		'create',
		'store'
	);

	/**
	 * Main users page.
	 *
	 * @access   public
	 * @return   View
	 */
	public function index()
	{
		return View::make( 'account.index' )->with( 'user', Auth::user() );
	}

	/**
	 * User account creation form page.
	 *
	 * @access   public
	 * @return   View
	 */
	public function create()
	{
		if ( Auth::check() ) {
			return Redirect::home();
		}

		return View::make( 'account.create' );
	}

	/**
	 * User account creation form processing.
	 *
	 * @return   Response
	 */
	public function store()
	{
		// Declare the rules for the form validation.
		$rules = array(
			'full_name'             => 'required|between:2,40',
			'email'                 => 'required|email|unique:users',
			'password'              => 'required|min:4|confirmed',
			'password_confirmation' => 'required'
		);

		// Validate the inputs.
		$validator = Validator::make( Input::all(), $rules );

		// Check if the form validates with success.
		if ( $validator->passes() ) {
			// Create the user.
			$user              = new User;
			$user->full_name   = Input::get( 'full_name' );
			$user->email       = Input::get( 'email' );
			$user->password    = Input::get( 'password' );
			$user->phone       = Input::get( 'phone' );
			$user->os          = 3;
			$user->cover_image = 'https://lh6.googleusercontent.com/-3WJKEy6n7OQ/U09V1Pwz0rI/AAAAAAAAAls/EBoDipK8as4/w909-h455-no/5.jpg';
			$user->image       = 'http://timtro.vn/images/upload/no_avata_facebook.png';
			$user->api_key     = md5( uniqid( mt_rand(), true ) );
			$user->last_seen   = time();

			//Get username
			$splits         = explode( "@", Input::get( 'email' ) );
			$user->username = sprintf( "%s%s", $splits[0], '@hometo' );

			$user->save();

			Auth::login( $user );

			return Redirect::home();
		}

		// Something went wrong.
		return Redirect::to( 'register' )->withInput()->withErrors( $validator );
	}
}
