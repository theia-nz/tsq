<?php

return [
	'pages' => [
		'title' => 'Pages',
		'route' => 'admin.pages.pageHome',
		'primary_navigation' => [
			'pageHome' => [
				'title' => 'Home',
				'singleton' => true,
			],
			'pageContact' => [
				'title' => 'Contact',
				'singleton' => true,
			],
		],
	],
	'menus' => [
		'title' => 'Menus',
		'module' => true,
	],
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
