<?php

DEFINE ('DB_USER', 'root@');
DEFINE ('DB_PASSWORD', 'Password');
DEFINE ('DB_HOST', 'LAPTOP-2N6K0L6N');
DEFINE ('DB_NAME', 'cs332c9');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('ERROR: Could not connect to MySQL ' .
        mysqli_connect_error());

?>