<?php

require 'layouts/head.php';
include 'layouts/nav.php';

$page = $_GET['page'];	/* gets the variable $page */
	if (!empty($page)) {
		$page .= '.php';
		include($page);
	} 	/* if $page has a value, include it */
	else {
		include('home.php');
	} 	/* otherwise, include the default page */

require 'layouts/footer.php';

?>
