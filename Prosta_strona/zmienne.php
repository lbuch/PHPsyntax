<?php
ob_start ();
$strona_id = $_GET['strona_id'];

switch($strona_id){
	case 1 : 
		$tytul = "Tytuł pierwszej strony";
		$naglowek = "Strona pierwsza";
 		include( 'strony/strona_pierwsza.inc'); 
		$tresc = ob_get_clean ();
	break;
	case 2 :
		$tytul = "Tytuł drugiej strony";
		$naglowek = "Strona druga";
		include('strony/strona_druga.inc');
		$tresc = ob_get_clean ();
	break;
	default : 
		$tytul = "Tytuł głównej strony";
		$naglowek = "Strona główna";
		$tresc = "Treść strony głównej";
	break;
}
?>