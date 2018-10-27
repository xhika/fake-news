'use strict';

function likeButton(button) {
	// console.log(button)
	let clicks = Number(button.innerText);
	clicks += 1;
	button.innerHTML = clicks;
	console.log('👍')
};






