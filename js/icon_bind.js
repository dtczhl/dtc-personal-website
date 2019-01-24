$(function(){

	// pdf icon
    var pdf_class = $('.pdf');
    jQuery.each(pdf_class, function(){
		$(this).prepend('<img title="Paper" src="image/icon/pdf.png" width="25" height="25" alt="pdf icon" />');
    });

	// video icon
	var video_class = $('.video');
    jQuery.each(video_class, function(){
		$(this).prepend('<img title="Video" style="margin-right:5px;" src="image/icon/video.png" width="22" height="22" alt="video icon" />');
    });

	// slides icon
	var slides_class = $('.slides');
    jQuery.each(slides_class, function(){
		$(this).prepend('<img title="Slides" src="image/icon/slides.png" width="25" height="25" alt="slides icon" />');
    });

	// award icon
	var award_class = $('.award');
    jQuery.each(award_class, function(){
		$(this).prepend('<img src="image/icon/award.png" width="25" height="25" alt="award icon" />');
    });

  var award_class = $('.void');
    jQuery.each(award_class, function(){
		$(this).prepend('<div width="28" height="28" />');
    });

	// github icon
	var github_class = $('.githubText');
    jQuery.each(github_class, function(){
		$(this).prepend('<span style="color:Blue;"> GitHub </span>');
    });

	var githubIcon_class = $('.githubIconText');
	jQuery.each(githubIcon_class, function(){
		$(this).prepend('<img src="image/icon/github.png" width="50" alt="GitHub icon" />');
	});

  var githubIcon_class = $('.github');
	jQuery.each(githubIcon_class, function(){
		$(this).prepend('<img title="Source Code" style="margin-right:5px;" src="image/icon/github.png" width="25" alt="GitHub icon" />');
	});

});
