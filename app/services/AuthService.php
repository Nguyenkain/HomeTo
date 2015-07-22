<?php

namespace Hometo\Auth;

use Illuminate\Auth\UserProviderInterface,

	Illuminate\Auth\GenericUser,

	Illuminate\Auth\UserInterface as UserInterface,

	Hometo\User\UserService;


class AuthService implements UserProviderInterface {

	/**
	 * @var UserService
	 */

	private $userService;


	public function __construct()

	{

		$userService = new UserService();

		$this->userService = $userService;

	}


	public function retrieveByID( $identifier )

	{

		/** @var User $user */

		$user = $this->userService->findUserByUserIdentifier( $identifier );

		return new GenericUser( $user );

	}

	public function retrieveByCredentials( array $credentials )

	{

		/** @var User $user */

		$user = $this->userService->findUserByUserName( $credentials );

		return new GenericUser( $user );

	}

	public function validateCredentials( UserInterface $user, array $credentials )

	{

		$validated = $this->userService->validateUserCredentials(

			$credentials['email'],

			$credentials['password']

		);

		return $validated;

	}

	public function retrieveByToken( $identifier, $token )
	{

	}

	public function updateRememberToken( UserInterface $user, $token )
	{
	}


}
