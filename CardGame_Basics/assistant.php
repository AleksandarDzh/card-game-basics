<?php

include 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

echo "Running tests!\n";

class assistant
{
	private const CMD = '.' .
		DIRECTORY_SEPARATOR . 'vendor' .
		DIRECTORY_SEPARATOR . 'bin' .
		DIRECTORY_SEPARATOR . 'phpunit';

	function __construct()
	{
		$output = array();
		exec(self::CMD, $output);

		foreach ($output as $value)
		{
			echo $value . "\n";
		}
	}
}

new assistant;