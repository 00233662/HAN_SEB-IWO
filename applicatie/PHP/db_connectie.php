<?php

// defined in 'variables.env'
$db_host = 'database_server'; // database server host
$db_name = 'GelreAirport'; // name for database

// defined in sql-script 'movies.sql'
$db_user    = 'sa'; // database user
$db_password = 'abc123!@#'; // password database user

// Test SSL not for the production server.
$connect = new PDO('sqlsrv:Server=' . $db_host . ';Database=' . $db_name . ';ConnectionPooling=0;TrustServerCertificate=1', $db_user, $db_password);

// Delete the password user
unset($db_password);

// displays exceptions in PHP.
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// connection function to use everywhere
function makeConnection() {
  global $connect;
  return $connect;
}