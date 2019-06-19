$ = jQuery.noConflict();

$(document).ready(function(){

	$('.mobile-menu a').on('click', function(){
		$('nav.menu-header-menu-container').toggle('slow');
	});
});