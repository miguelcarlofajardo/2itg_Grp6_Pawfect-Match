<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'pawfectmatch123');
define('DB_PASSWORD', 'Pawfectmatch123-');
define('DB_NAME', 'id20796123_pawfectmatch');

/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
