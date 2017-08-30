<?php

$this->add_map('get', '/userman/users', 'userman', array(
	'path' => 'userman.php',
	'controller' => 'restapi_Userman',
	'method' => 'get_users',
));

$this->add_map('get', '/userman/users/:id', 'userman', array(
	'path' => 'userman.php',
	'controller' => 'restapi_Userman',
	'method' => 'get_user_id',
));

$this->add_map('get', '/userman/extensions', 'userman', array(
	'path' => 'userman.php',
	'controller' => 'restapi_Userman',
	'method' => 'get_extensions',
));

$this->add_map('get', '/userman/extensions/:id', 'userman', array(
	'path' => 'userman.php',
	'controller' => 'restapi_Userman',
	'method' => 'get_extension_id',
));

$this->add_map('put', '/userman/extensions/:id', 'userman', array(
		'path'			=> 'userman.php',
		'controller'=> 'restapi_Userman',
		'method'		=> 'put_user_id',
));

$this->add_map('delete', '/userman/extensions/:id', 'userman', array(
                'path'                  => 'userman.php',
                'controller'    => 'restapi_Userman',
                'method'                => 'delete_user_id',
));

?>
