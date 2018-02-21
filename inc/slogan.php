<?php 

function optimize_slogan() {

$tagline = rand (1, 7 );

	switch ($tagline) {
		case 1:
			return "- It's in the bag";
			break;
		case 2:
			return "- Kurkista kukkaroon";
			break;
		case 3:
			return "- Raota kukkaronnyörejä";
			break;
		case 4:
			return "- Me teemme mitä teemme";
			break;
		case 5:
			return "- Digitoimisto jossa on munaa";
			break;
		case 6:
			return "- The truth is in there";
			break;	
		case 7:
			return "- Suomen fiktiivisin digitoimisto";
			break;	
		default:
			return "";
			break;
	}

}

?>