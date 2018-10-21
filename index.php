<?php
declare(strict_types=1);
/**
 *
 */
require __DIR__.'/functions.php';
require __DIR__.'/data.php';

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
	<div class="flex flex-wrap mx-auto">
		<div class="w-full bg-grey-darkest h-8"></div>
	</div>
<!--Ending nav-->

<!--Starting container-->
		<div class="bg-indigo w-4/5 mt-8 max-w-xl">
			<h1 class="text-white py-8 text-center">News feed</h1>

		</div>
	<div class="flex flex-wrap max-w-xl">
		<div class="w-4/5 sm:w-4/5  md:w-4/5 lg:w-1/5 bg-white">


		</div>
		<div class="w-4/5 bg-white">
			<div class="mr-8">
				<h1 class="text-teal">Something</h1>
				<i class="fas fa-newspaper text-black text-5xl p-2"></i>
				<p class="bg-grey-lighter p-4"><span class="text-red-dark p-2">$</span>some text</p>
			</div>
		<!--Start Title section-->
			<?php foreach ($authors as $author) : ?>
				<div class="text-teal uppercase pl-3 m-3">
					<h2><?= $author['title']; ?></h2>
				</div>
		<!--End Title section-->

			<!--Start name section-->
				<div class="text-grey m-3 pl-3">
					<span>Posted by: </span><span class="text-red-dark"><?= $author['name']; ?></span>
				</div>
			<!--End name section-->

				<div class="bg-black text-white mr-8">
					<p class="p-8 py-6 my-4 leading-normal"><?= $author['content']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div><!--Ending container-->


<script src="script.js"></script>
</body>
</html>

