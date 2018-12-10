<?php
	//Variable content = none
	$content = "none";

	//als de gebruiker een keuze heeft gemaakt word deze doorgeleid naar de pagina die hij heeft gekozen.
	//Kiest de gebruiker niks, gebeurt er ook niks.
	if(isset($_GET['choice'])) {
		$content = strip_tags(htmlspecialchars($_GET['choice']));
	}

	switch ($content) {
		case "con":
			$loadpage = "contact.php";
			break;
		case "ass":
			$loadpage = "Assortiment.php";
			break;
		case "kna":
			$loadpage = "Knalvuurwerk.php";
			break;
		case "sie":
			$loadpage = "Siervuurwerk.php";
			break;
		case "kin":
			$loadpage = "Kindervuurwerk.php";
			break;
		case "bes":
			$loadpage = "Bescherming.php";
			break;
		default:
			$loadpage = "home.php";
	}

	include('header.php');
	include('navigatie.php');
	include($loadpage);
	include('footer.php');


		/*case "reg":
			$loadpage = "register.php";
			break;*/
		/*case "log":
			$loadpage = "login.php";
			break;*/
?>