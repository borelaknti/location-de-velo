<?php
	include_once realpath(dirname(__DIR__)) . '/includes/DatabaseObjects.php';
	class Factures extends DatabaseObjects	
	{
		protected static string $tableName = "rentals";
	}
?>