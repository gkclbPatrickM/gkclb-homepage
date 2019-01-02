<?
	if (!empty($_GET["page"])) {
		$nav_page = $_GET["page"];
	} elseif (!empty($_GET["fwd"])) {
		$nav_page = "fwd";
		$fwd = $_GET["fwd"];
	} else {
		$nav_page = "home";
	}
?>


<html xmlns="http://www.w3.org/1999/xhtml" lang="de" xml:lang="de">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<title>gkclb.de</title>
	</head>
	<body bgcolor="#000000">
		<div id="container">
			<div id="background">
    		<? include('bg.php'); ?>
    	</div>
			<div id="content">
				<? include('navigation.php'); ?>
				<? include($nav_page.'.php'); ?>
			</div>
		</div>
	</body>
</html>
