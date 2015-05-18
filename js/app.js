$(document).ready(function(){
	$('.menu-toggle').on('click', function(e){
		e.preventDefault();
		$(this).next().toggleClass('active');
	});
});