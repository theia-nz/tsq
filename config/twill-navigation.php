<?php

return [
	'settings' => [
		'title' => 'Settings',
		'route' => 'admin.settings',
		'params' => ['section' => 'company'],
		'primary_navigation' => [
			'company' => [
				'title' => 'Company',
				'route' => 'admin.settings',
				'params' => ['section' => 'company'],
			],
		],
	],
];
