<?php
	include_once realpath(dirname(__DIR__)) . '/includes/DatabaseObjects.php';
	class Facture extends DatabaseObjects	
	{
		protected static string $tableNames = " rentals, velots , clients ";
	}
?>