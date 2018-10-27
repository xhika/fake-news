<?php
declare(strict_types=1);

// $rand = rand(0,100);



function myDateComp($a, $b) {
	return strtotime($b['date']) - strtotime($a['date']);
}
function sortDate($authors) {
	usort($authors, "myDateComp");
	return $authors;
}






