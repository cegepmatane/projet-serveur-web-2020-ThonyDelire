<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$usager = 'antoine';
$motdepasse = 'root';
$hote = 'localhost';
$base = 'sportive';

$dsn = 'mysql:dbname='.$base.';host=' . $hote;
$basededonnees;
try
{
	$basededonnees = new PDO($dsn, $usager, $motdepasse);
}
catch(PDOException $exception)
{
	echo $e->getMessage();
}
?>

