'use strict';

/* Please ❤ this if you like it! */

const cover1 = document.getElementById('cover-1');
const cover2 = document.getElementById('cover-2');
const cover3 = document.getElementById('cover-3');

setTimeout(() => {
	cover1.style.transform = 'translateY(-100%)';
	cover2.style.transform = 'translateY(-100%)';
	cover3.style.transform = 'translateY(-100%)';
}, 1500);

setTimeout(() => {
	cover2.style.transform = 'translateY(-200%)';
	cover3.style.transform = 'translateY(-200%)';
}, 3000);

setTimeout(() => {
	cover3.style.transform = 'translateY(-300%)';
}, 4500);
