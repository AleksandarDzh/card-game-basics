<?php

include 'vendor\\autoload.php';

echo "Running tests!\n";

class assistant
{
	private const CMD = ' .\vendor\bin\phpunit';
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