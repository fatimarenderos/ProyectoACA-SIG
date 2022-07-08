<!------ SPDX-License-Identifier: Apache-2.0 ---------->

<?php

//Funcion para hacer log out de sesion
session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

header("Location: login.php");
die;