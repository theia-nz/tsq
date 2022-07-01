<?php

return [
	'enabled' => [
		'settings' => true,
	],
	'settings' => [
		'crops' => [
			'company_logo' => [
				'default' => [
					[
						'name' => 'default',
						'ratio' => 16 / 9,
					],
				],
				'mobile' => [
					[
						'name' => 'mobile',
						'ratio' => 1,
					],
				],
				'flexible' => [
					[
						'name' => 'free',
						'ratio' => 0,
					],
					[
						'name' => 'landscape',
						'ratio' => 16 / 9,
					],
					[
						'name' => 'portrait',
						'ratio' => 3 / 5,
					],
				],
			],
			'company_favicon' => [
				'default' => [
					[
						'name' => 'default',
						'ratio' => 16 / 9,
					],
				],
				'mobile' => [
					[
						'name' => 'mobile',
						'ratio' => 1,
					],
				],
				'flexible' => [
					[
						'name' => 'free',
						'ratio' => 0,
					],
					[
						'name' => 'landscape',
						'ratio' => 16 / 9,
					],
					[
						'name' => 'portrait',
						'ratio' => 3 / 5,
					],
				],
			],
		],
	],
];
