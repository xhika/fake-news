<?php
declare(strict_types=1);

// $rand = rand(0,100);



function sortDate() {
	global $authors; //global array
		function myDateComp($a, $b) {
			return strtotime($b['date']) - strtotime($a['date']);
		}
			usort($authors, "myDateComp");
}






