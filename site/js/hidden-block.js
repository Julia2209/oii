$(document).ready(function(){
	$('about-us-with-hidden-block').hover(function(){
    $('#hidden_block').stop().fadeIn("slow");
    }, function () {
        $('#hidden_block').stop().fadeOut("slow");
   });
})