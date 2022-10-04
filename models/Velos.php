<?php
	include_once realpath(dirname(__DIR__)) . '/includes/DatabaseObjects.php';
	class Velos extends DatabaseObjects	
	{
		protected static string $tableName = "velots";
	}
?>