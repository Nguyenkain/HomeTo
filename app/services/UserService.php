<?php

namespace Hometo\User;

class UserService {

	public function findUserByUserIdentifier( $identifier )
	{
		$du = $this->dummyUsers();

		foreach ( $du as $u ) {

			if ( $u['id'] == $identifier ) {

				return array( 'id' => $u['id'], 'name' => $u['name'], 'email' => $u['email'] );

			}

		}

		return array( 'name' => '', 'email' => '' );
	}

	public function findUserByUserName( $identifier )
	{
		//Get username
		$splits         = explode( "@", $identifier['email'] );
		$username = sprintf( "%s%s", $splits[0], '@hometo' );

		$user = \User::whereUsername( $username )->wherePasswordHash( md5( $identifier['password'] ) )->first();
		if ( $user ) {
			return $user->toArray();
		}

		return array( 'name' => '', 'email' => '' );
	}


	public function validateUserCredentials( $email, $password )
	{

		//Get username
		$splits         = explode( "@", $email );
		$username = sprintf( "%s%s", $splits[0], '@hometo' );

		$count = \User::whereUsername( $username )->wherePasswordHash( md5($password) )->count();
		return $count != 0;
	}

	public function dummyUsers()

	{

		return $user = array(

			array( 'id' => '1', 'name' => 'Anup', 'email' => 'anup@gmail.com', 'password' => '123456' ),
			array( 'id' => '2', 'name' => 'Vinit', 'email' => 'vinit@gmail.com', 'password' => '123456' ),
			array( 'id' => '3', 'name' => 'Dilip', 'email' => 'dilip@gmail.com', 'password' => '123456' ),
			array( 'id' => '4', 'name' => 'Vinay', 'email' => 'vinay@gmail.com', 'password' => '123456' ),
			array( 'id' => '5', 'name' => 'Ajay', 'email' => 'ayay@gmail.com', 'password' => '123456' ),

		);

	}
}
