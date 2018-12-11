$(function(){

	// pdf icon
    var pdf_class = $('.pdf');
    jQuery.each(pdf_class, function(){
		$(this).prepend('<img src="image/icon/pdf.png" width="28" height="28" alt="pdf icon" />');
    });

	// video icon
	var video_class = $('.video');
    jQuery.each(video_class, function(){
		$(this).prepend('<img src="image/icon/video.png" width="28" height="28" alt="video icon" />');
    });

	// slides icon
	var slides_class = $('.slides');
    jQuery.each(slides_class, function(){
		$(this).prepend('<img src="image/icon/slides.png" width="28" height="28" alt="slides icon" />');
    });

	// award icon
	var award_class = $('.award');
    jQuery.each(award_class, function(){
		$(this).prepend('<img src="image/icon/award.png" width="28" height="28" alt="award icon" />');
    });

  var award_class = $('.void');
    jQuery.each(award_class, function(){
		$(this).prepend('<div width="28" height="28" />');
    });

	// github icon
	var github_class = $('.github');
    jQuery.each(github_class, function(){
		$(this).prepend('<span style="color:Blue;"> GitHub </span>');
    });

	var githubIcon_class = $('.githubIcon');
	jQuery.each(githubIcon_class, function(){
		$(this).prepend('<img src="image/icon/github.png" width="50" alt="GitHub icon" />');
	});


});
