<?php

return [

	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session',

	/**
	 * Consumers
	 */
	'consumers' => [

		'Facebook' => [
			'client_id' => '',
			'client_secret' => '',
			'scope' => [],
		],

		'Google' => [
			'client_id' => '359780870133-a8qvh3vfq0l0dgoj72bv39erea3ikdqq.apps.googleusercontent.com
',
		    'client_secret' => 'VnM5URyjpRioPglVJTqtOAJ6',
		    'scope' => ['userinfo_email', 'userinfo_profile'],
		]
	]

];