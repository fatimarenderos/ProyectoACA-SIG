<!------ SPDX-License-Identifier: Apache-2.0 ---------->

<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "demo";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
