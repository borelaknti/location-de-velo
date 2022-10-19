<?php
	include_once realpath(dirname(__DIR__)) . '/includes/DatabaseObjects.php';
	class Rentals extends DatabaseObjects	
	{
		protected static string $tableName = "rentals";
	}
?>