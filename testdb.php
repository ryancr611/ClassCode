#!/usr/bin/php
<?php
$db = new mysqli("localhost","root","12345","Classes");
// this is a C++ style comment
/* this is a C style comment*/
# this is a shell style comment

if ($db->connect_errno != 0)
{
	echo "error connecting to databse: ".$db->connect_error.PHP_EOL;
	exit();
}

echo "successfully connected!".PHP_EOL;

$query = "select * from class;";

$db->query($query);

$db->close();

echo "program complete".PHP_EOL;
?>
