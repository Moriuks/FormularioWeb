<?php 
DEFINE ('DB_USER','DevWebCib');
DEFINE ('DB_PASSWORD','toor101');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'DevWebCib');

$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('No se pudo conectar: ' . mysqli_connect_error());
?>