<?php

Autoloader::add_core_namespace('Grocerycrud');

Autoloader::add_classes(array(
	/**
	 * Grocerycrud classes.
	 */
	'Grocerycrud\\grocery_CRUD' => __DIR__.'/classes/grocery_crud.php',
	'Grocerycrud\\Image_moo' => __DIR__.'/classes/image_moo.php',

));