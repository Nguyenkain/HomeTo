<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage'   => 'Session',
	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
		'Facebook' => array(
			'client_id'     => '523594807788426',
			'client_secret' => '8bc2dfbfdcc01608169b054826156312',
			'scope'         => array( 'email' ),
		),
		/**
		 * Google
		 */
		'Google'   => array(
			'client_id'     => '521485590590-bcjeo567rlkeakdbg257q9d9i17e9c3o.apps.googleusercontent.com',
			'client_secret' => 'cW4aCS7w1Hk40IjsuzHxi2Wn',
			'scope'         => array( 'userinfo_email', 'userinfo_profile' ),
		),

	)

);
