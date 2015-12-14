// Show/hide for mobile menu.
var menu = document.querySelector('.site-nav__a--menu');

if (menu) {
	menu.addEventListener('click', function() {
		document.querySelector('.site-nav ul').classList.toggle('show');
	});
}

// Reverse numbering for book lists.
var bookList = document.querySelectorAll('.books ol');

if (bookList) {
	for (var i=0; i<bookList.length; i++) {
		bookList[i].setAttribute('reversed', 'reversed');
	}
}
