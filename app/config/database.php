<?php
/* Witam! */
class DATABASE_CONFIG {

	var $default = array(
		'driver' => 'mysql',				// Silnik bazy danych
		'persistent' => false,
		'host' => 'localhost',			// Gdzie jest baza?
		'login' => 'fenix',			// Nazwa użytkownika bazy danych
		'password' => 'fckgwrhqq2',	// Hasło do bazy danych
		'database' => 'fenix',		// Nazwa bazy danych
		'prefix' => '',					// Pozostawić puste
		//'encoding' => 'utf8',
	);

// Nie wiem, po co jest ponizsze, ale juz tu bylo...
	var $test = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
}
