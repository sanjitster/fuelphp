<?php
/**
 * Base Database Config.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
	'active' => 'default',

	/**
	 * Base config, just need to set the DSN, username and password in env. config.
	 */
	'default' => array(
		'type'        => 'mysqli',
		'connection'  => array(
            'hostname'       => 'localhost',
            'port'           => '3306',
            'database'       => 'fuel',
            'username'       => 'root',
            'password'       => 'root',
			'persistent'     => false,
		),
        'identifier'   => '`',
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => false,
		'profiling'    => false,
	),

    /*
    'redis' => array(
        'default' => array(
            'hostname'  => '127.0.0.1',
            'port'      => 6379,
        )
    ),

    // a MySQL driver configuration
    'development' => array(
        'type'           => 'mysqli',
        'connection'     => array(
            'hostname'       => 'localhost',
            'port'           => '3306',
            'database'       => 'fuel_db',
            'username'       => 'your_username',
            'password'       => 'y0uR_p@ssW0rd',
            'persistent'     => false,
        ),
        'identifier'   => '`',
        'table_prefix'   => '',
        'charset'        => 'utf8',
        'enable_cache'   => true,
        'profiling'      => false,

    ),

// a PDO driver configuration
    'production' => array(
        'type'           => 'pdo',
        'connection'     => array(
            'dsn'            => 'mysql:host=localhost;dbname=fuel_db',
            'username'       => 'your_username',
            'password'       => 'y0uR_p@ssW0rd',
            'persistent'     => false,
        ),
        'table_prefix'   => '',
        'charset'        => 'utf8',
        'enable_cache'   => true,
        'profiling'      => false,
    ),*/

);
