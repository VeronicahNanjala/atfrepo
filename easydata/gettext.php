	<?php

		//Sanitize the POST values
		$searchterm = $_POST['search'];

		header("location: search.php?phrase=".$searchterm);
		?>