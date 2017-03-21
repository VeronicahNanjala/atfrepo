<?php
		//define cnstants
		define('SERVER', "localhost");
		define('USER', "root");
		define('PASSWORD', "");
		define('DB_NAME', "easydata");

		//connect to database
		$con = mysqli_connect(SERVER, USER, PASSWORD, DB_NAME);

		//test connection
		if (!$con) {
			die ("Unabble to connect to database ".mysqli_error($con));
		}

?>