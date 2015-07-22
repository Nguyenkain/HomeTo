<?php

class SessionController extends \BaseController {

	/**
	 * Show the form for creating a new session.
	 *
	 * @return Response
	 */
	public function create()
	{
		if ( Auth::check() ) {
			return Redirect::to( '/' );
		}

		// Show the login page.
		return View::make( 'session.create' );
	}


	/**
	 * Store a newly created session
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'email'    => 'required|email',
			'password' => 'required'
		);

		$email    = Input::get( 'email' );
		$password = Input::get( 'password' );

		$input = Input::only( 'email', 'password' );

		$validator = Validator::make( $input, $rules );

		if ( $validator->passes() ) {
			if ( Auth::attempt( [ 'email' => $email, 'password' => $password ] ) ) {
				return Redirect::home();
			}

			return Redirect::to( 'login' )->with( 'error', 'Email or password invalid.' );
		}

		// Something went wrong.
		return Redirect::to( 'login' )->with( 'error', $validator );
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy( $id = null )
	{
		Auth::logout();

		return Redirect::home();
	}

	/**
	 * Login user with facebook
	 *
	 * @return void
	 */

	public function loginWithFacebook()
	{
		// get data from input
		$code = Input::get( 'code' );

		// get fb service
		$fb = OAuth::consumer( 'Facebook' );

		// check if code is valid

		// if code is provided get user data and sign in
		if ( ! empty( $code ) ) {

			// This was a callback request from facebook, get the token
			$token = $fb->requestAccessToken( $code );

			// Send a request with it
			$result = json_decode( $fb->request( '/me' ), true );

			//Login with user
			$username = sprintf( "%s@%s", $result['id'], 'facebook' );
			$user     = User::whereUsername( $username )->first();
			if ( $user ) {
				$user->last_seen = time();
				$user->os        = 3;
			} else {
				// Create the user.
				$user            = new User;
				$user->full_name = $result['name'];
				$user->email     = $result['email'];
				$user->password  = 'facebook123';
				$user->os        = 3;
				$user->image     = "https://graph.facebook.com/" . $result['id'] . "/picture?type=normal";
				$user->last_seen = time();
				$user->username  = $username;
			}

			$user->save();
			Auth::login( $user );

			return Redirect::home();

		} // if not ask for permission first
		else {
			// get fb authorization
			$url = $fb->getAuthorizationUri();

			// return to facebook login url
			return Redirect::to( (string) $url );
		}

	}

	/**
	 * Login with google
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function loginWithGoogle()
	{

		// get data from input
		$code = Input::get( 'code' );

		// get google service
		$googleService = OAuth::consumer( 'Google' );

		// check if code is valid

		// if code is provided get user data and sign in
		if ( ! empty( $code ) ) {

			// This was a callback request from google, get the token
			$token = $googleService->requestAccessToken( $code );

			// Send a request with it
			$result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );

			//Login with user
			$username = sprintf( "%s@%s", $result['id'], 'google' );
			$user     = User::whereUsername( $username )->first();
			if ( $user ) {
				$user->last_seen = time();
				$user->os        = 3;
			} else {
				// Create the user.
				$user              = new User;
				$user->full_name   = $result['name'];
				$user->email       = $result['email'];
				$user->password    = 'google123';
				$user->os          = 3;
				$user->api_key     = md5( uniqid( mt_rand(), true ) );
				$user->image       = $result['picture'];
				$user->cover_image = "https://lh6.googleusercontent.com/-3WJKEy6n7OQ/U09V1Pwz0rI/AAAAAAAAAls/EBoDipK8as4/w909-h455-no/5.jpg";
				$user->last_seen   = time();
				$user->username    = $username;
			}

			$user->save();
			Auth::login( $user );

			return Redirect::home();

		} // if not ask for permission first
		else {
			// get googleService authorization
			$url = $googleService->getAuthorizationUri();

			// return to google login url
			return Redirect::to( (string) $url );
		}
	}
}
