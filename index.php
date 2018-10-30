<?php
declare(strict_types=1);

require __DIR__.'/functions.php';
require __DIR__.'/data.php';
const BR = "<br/>";

$allPosts = convertArray($authors);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>fake news</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body class="bg-grey-light">
	<!--Starting nav-->
	<nav class="bg-grey-darkest h-12">

	</nav>
	<!--Ending nav-->
	<?= BR . BR; ?>
	<!--Starting container-->
	<div class="bg-white mx-auto mt-8 w-3/4">
		<h1 class="bg-indigo text-white py-8 text-center rounded-t">fake news</h1>
		<div class="m-4 text-center ">

		</div>
		<div class="flex flex-wrap mb-4">
			<div class="w-full m-4">
				<?php foreach($allPosts as $post) : ?>
					<?php require __DIR__.'/card.php'; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!--End Container-->



	<script src="script.js"></script>
</body>
</html>

