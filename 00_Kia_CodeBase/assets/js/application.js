$('.js-primary-nav-toggle').on('click', function(){
	$('body').toggleClass('is-nav-state');
})
$('nav a').on('click', function(){
	$('body').removeClass('is-nav-state');
});
// function flipCardBack(card){
// 	$(card).parent().addClass('flipped');
// }
// function flipCardFront(card){
// 	$(card).parent().removeClass('flipped');
// }
