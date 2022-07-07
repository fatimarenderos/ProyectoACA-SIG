<!------ SPDX-License-Identifier: Apache-2.0 ---------->

<?php

//Development Connection
//$dbhost = "localhost";
//$dbuser = "root";
//$dbpass = "";
//$dbname = "demo";

//Remote database
$dbhost = "remotemysql.com";
$dbuser = "g8YDNdy1RT";
$dbpass = "2K8Va42nsG";
$dbname = "g8YDNdy1RT";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
