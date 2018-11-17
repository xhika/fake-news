<div class="max-w-lg mx-auto rounded overflow-hidden shadow-lg mt-6 mb-6">
	<img class="w-full" src="<?= $post['img']; ?>">
	<div class="px-6 py-4">
		<div class="font-bold text-xl mb-2"><?= $post['title'];?></div>
		<p class="text-grey-darker text-base">
			<?= $post['content']; ?>
		</p>
	</div>
	<div class="px-6 py-4">
		<span class="inline-block bg-indigo-dark rounded-full px-3 py-1 text-sm font-semibold text-white mr-2"><?= $post['author'];?></span>
		<span class="inline-block bg-indigo-dark rounded-full px-3 py-1 text-sm font-semibold text-white mr-2"><?= $post['date']; ?></span>
		<span class="inline-block bg-indigo-dark rounded-full px-3 py-1 text-sm font-semibold text-white"><?= $post['likes']; ?></span>
		<span class="float-right">
			<button type="button" class="text-indigo-dark text-3xl font-bold mb-2">
				<i id="heart" class="fas fa-heart"></i>
			</button>
		</span>
	</div>
</div>
