<?php
return array(

	'default' => 'sqlite',

	'connections' => array(
		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => storage_path('testing.sqlite'),
			'prefix'   => '',
		),
	),

);
