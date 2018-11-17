'use strict';

const buttons = document.querySelectorAll('button');
	buttons.forEach( function(button) {
		button.addEventListener('click', (e) => {
		let clicks = Number(button.innerText);
		clicks += 1;
		button.innerText = clicks;
		})
	});

