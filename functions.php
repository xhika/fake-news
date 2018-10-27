<?php
declare(strict_types=1);

// $rand = rand(0,100);



function sortDate($authors) {
		function myDateComp($a, $b) {
			return strtotime($b['date']) - strtotime($a['date']);
		}
			usort($authors, "myDateComp");

			return $authors;
}






