 <?php
	/**
	 * Created by PhpStorm.
	 * User: boott
	 * Date: 13.04.2017
	 * Time: 12:21
	 */
	
	return [
		'name' => '',
		'options' => [
			'route'    => '/shop[/:action][/:id]',
			'constraints' => [
				'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
				'id'     => '[0-9]+',
			],
			'controllers' => [
					'Shop\Controller\Index' => Controller\IndexController::class
	            ],
			],
		
	];