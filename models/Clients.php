<?php
	include_once realpath(dirname(__DIR__)) . '/includes/DatabaseObjects.php';
	class Clients extends DatabaseObjects	
	{
		protected static string $tableName = "clients";
	}
?>