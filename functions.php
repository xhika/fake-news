<?php
declare(strict_types=1);


/**
 * Sorts array after date
 *
 * @param  array  $a
 * @param  array  $b
 * @return int
 */
function sortByDate(array $a, array $b) : int
{
	return strtotime($b['date']) - strtotime($a['date']);
}

/**
 * Converts the authors array into an array with all the posts
 *
 * @param  array  $authors
 * @return array
 */
function convertArray (array $authors) : array {
	$allPosts = [];

	foreach ($authors as $author) {
		foreach ($author['posts'] as $post) {
			$post['author'] = $author['name'];
			$allPosts[] = $post;
		}
	}


	usort($allPosts, 'sortByDate');

	return $allPosts;
}






