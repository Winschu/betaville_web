<?php
header('Content-type: application/json; charset=utf-8');

$conString = "host=localhost dbname=betavillegl user=superuser password=password";
$dbCon = pg_connect($conString);

$result = pg_query_params($dbCon, 'SELECT * FROM shops WHERE name = $1', array("Joe's Widgets"));