<!------ SPDX-License-Identifier: Apache-2.0 ---------->

<?php
//Development Connection
//$mysqli = new mysqli("localhost", "root", "", "demo");

//Remote Connection
$mysqli = new mysqli("remotemysql.com", "g8YDNdy1RT", "2K8Va42nsG", "g8YDNdy1RT");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";
/*
$mysqli = new mysqli("127.0.0.1", "usuario", "contraseña", "basedatos", 3306);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";
*/
?>