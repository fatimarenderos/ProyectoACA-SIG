<!------ SPDX-License-Identifier: Apache-2.0 ---------->
<?php
// Opens a connection to a MySQL server.

//Development Connection
//$connection=mysqli_connect ("localhost", 'root', '','demo');

//Estableciendo conexion remota con la base de datos
$connection=mysqli_connect ("remotemysql.com", 'g8YDNdy1RT', '2K8Va42nsG','g8YDNdy1RT');

if (!$connection) {
    die('Not connected : ' . mysqli_connect_error());
}

// Sets the active MySQL database.
/*$db_selected = mysqli_select_db($connection,'accounts');
if (!$db_selected) {
    die ('Can\'t use db : ' . mysqli_error($connection));
}*/