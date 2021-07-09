const selectElememt = (s) =>document.querySelector(s);

selectElememt (s'.open').addEventlistener('click', () =>  {
	selectElememt(s '.nav-list').classList.add('active');
});

selectElememt (s:'.close').addEventlistener('click', () =>  {
	selectElememt(s:'.nav-list').classList.remove('active');
});