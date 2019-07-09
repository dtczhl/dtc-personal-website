$(function(){

	// pdf icon
    var pdfClass = $(".pdf");
    jQuery.each(pdfClass, function(){
		$(this).prepend('<img title="Paper" src="image/icon/pdf.png" width="25" height="25" alt="pdf icon" />');
    });

    // poster icon
    var posterClass = $(".poster");
    jQuery.each(posterClass, function(){
    $(this).prepend('<img title="Poster" src="image/icon/poster.png" width="30" height="30" alt="poster icon" />');
    });

	// video icon
	var videoClass = $(".video");
    jQuery.each(videoClass, function(){
		$(this).prepend('<img title="Video" style="margin-right:5px;" src="image/icon/video.png" width="22" height="22" alt="video icon" />');
    });

	// slides icon
	var slidesClass = $(".slides");
    jQuery.each(slidesClass, function(){
		$(this).prepend('<img title="Slides" src="image/icon/slides.png" width="25" height="25" alt="slides icon" />');
    });

	// award icon
	var awardClass = $(".award");
    jQuery.each(awardClass, function(){
		$(this).prepend('<img src="image/icon/award.png" width="25" height="25" alt="award icon" />');
    });

  var awardClass = $(".void");
    jQuery.each(awardClass, function(){
		$(this).prepend('<div width="28" height="28" />');
    });

	// github icon
	var githubClass = $(".githubText");
    jQuery.each(githubClass, function(){
		$(this).prepend('<span style="color:Blue;"> GitHub </span>');
    });

	var githubIconClass = $(".githubIconText");
	jQuery.each(githubIconClass, function(){
		$(this).prepend('<img src="image/icon/github.png" width="50" alt="GitHub icon" />');
	});

  var githubIconClass = $(".github");
	jQuery.each(githubIconClass, function(){
		$(this).prepend('<img title="Source Code" style="margin-right:5px;" src="image/icon/github.png" width="25" alt="GitHub icon" />');
	});

});
