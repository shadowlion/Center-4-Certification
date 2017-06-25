<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'layouts/head.php';
include 'layouts/nav.php';

if (isset($_GET['page'])) {
	$page = $_GET['page'];	/* gets the variable $page */
	$page .= '.php';
	include($page);
} 	/* if $page has a value, include it */
else {
	include('home.php');
} 	/* otherwise, include the default page */

require 'layouts/footer.php';

?>
