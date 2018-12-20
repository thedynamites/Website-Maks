<?php
	//Variable content = none
	$content = "none";

	//als de gebruiker een keuze heeft gemaakt word deze doorgeleid naar de pagina die hij heeft gekozen.
	//Kiest de gebruiker niks, gebeurt er ook niks.
	if(isset($_GET['choice'])) {
		$content = strip_tags(htmlspecialchars($_GET['choice']));
	}

	switch ($content) {
		case "sie":
		$loadpage = "Siervuurwerk.php";
		case "kna":
		$loadpage = "Knalvuurwerk.php";
		default:
			$loadpage = "home.php";
	}

	include('layout_head.php');
	include('navbar.php');
	include($loadpage);
	include('layout_foot.php');


		/*case "reg":
			$loadpage = "register.php";
			break;*/
		/*case "log":
			$loadpage = "login.php";
			break;*/
?>