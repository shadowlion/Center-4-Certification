<?php

include 'layouts/head.php';

$page = $_GET['page'];	/* gets the variable $page */
	if (!empty($page)) {
		$page .= '.php';
		include($page);
	} 	/* if $page has a value, include it */
	else {
		include('home.php');
	} 	/* otherwise, include the default page */

include 'layouts/footer.php';

?>
