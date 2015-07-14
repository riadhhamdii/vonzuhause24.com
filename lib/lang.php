<?php


function getLangMessage($message){

	// Messages
	$deMessages = array(
				"Contact already added to target campaign" => "Kontakt existiert bereits.",
				"Contact already queued for target campaign" => "Kontakt existiert bereits.",
				"Invalid email syntax" => "Ungültige Emailadresse.",
				"Missing campaign" => "Ein Fehler ist aufgetreten. Bitte versuchen Sie es etwas später nochmal.",
				"All fields are required" => "Bitte tragen Sie alle Daten ein."
			);
	
	// Get the appropriate message if exist
	if( array_key_exists($message, $deMessages) ){
	
		return $deMessages[$message];
	
	}
	
	// Default error if we don't find the message
	return "Ein Fehler ist aufgetreten. Bitte versuchen Sie es etwas später nochmal.";

}


?>