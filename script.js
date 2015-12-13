
$( document ).ready(function() {



$('.panel-faq').on('show.bs.collapse', function() {
	$(this).addClass('active');

});

$('.panel-faq').on('hide.bs.collapse', function() {
	$(this).removeClass('active');

});

});//end of document ready