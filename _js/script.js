var menu = document.querySelector('.site-nav__a--menu');

if (menu) {
	menu.addEventListener('click', function() {
		document.querySelector('.site-nav ul').classList.toggle('show');
	});
}
