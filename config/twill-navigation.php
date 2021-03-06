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
			'pageAbout' => [
				'title' => 'About',
				'singleton' => true,
			],
			'pageService' => [
				'title' => 'Services',
				'singleton' => true,
			],
			'pageProject' => [
				'title' => 'Projects',
				'singleton' => true,
			],
			'pageContact' => [
				'title' => 'Contact',
				'singleton' => true,
			],
		],
	],
	'modules' => [
		'title' => 'Modules',
		'route' => 'admin.modules.services.index',
		'primary_navigation' => [
			'services' => [
				'title' => 'Services',
				'module' => true,
			],
			'projects' => [
				'title' => 'Projects',
				'module' => true,
			],
		],
	],
	'forms' => [
		'title' => 'Forms',
		'route' => 'admin.forms.formContact',
		'primary_navigation' => [
			'formContact' => [
				'title' => 'Contact Form',
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
			'icon' => [
				'title' => 'Icon',
				'route' => 'admin.settings',
				'params' => ['section' => 'icon'],
			],
			'label' => [
				'title' => 'Label',
				'route' => 'admin.settings',
				'params' => ['section' => 'label'],
			],
		],
	],
];
