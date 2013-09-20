<?php

require_once __DIR__.'/../vendor/autoload.php';

spl_autoload_register(function($class)
{
	$file = __DIR__.DIRECTORY_SEPARATOR.str_replace(array('_', '\\'), '/', $class).'.php';

	if (is_file($file))
	{
		require_once $file;
	}
});
