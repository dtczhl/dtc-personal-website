function showECS60EvaluationComments(){
	
	// if the window is already shown, then do nothing
	if ($('#window_ecs60_ucdavis').length > 0) { 
		return;
	}
	
	var self_comments = "The first time of my teaching did not go well, but I enjoyed it.";
	var comment_intro = "Student evaluation comments are shown below.";
	var student_comments = [
		"All the TAs in this class we're pretty atrocious, honestly. Not sure the name of the one who taught sections, but he needs to improve greatly before teaching again.",
		"Worse TA I have seen at UC Davis so far. It is very hard to understand his accent and he doesn't answer our questions well enough. I am lucky that Sean offers 9 hours of office hours because if it weren't for that I would have no support in this class.",
		"Huanle knows the subject matter. However, his communication skills are rather poor. It is extremely difficult to understand him due to his heavy accent and awkward sentence construction. He led the discussions throughout the quarter, and they were very difficult to follow. In a few one on one interactions, with some effort, he was a helpful resource to consult.",
		"He has a very heavy accent so it is hard to understand. Also, he does not come to his assigned office hours and does not announce the class beforehand.",
		"showed us complex examples for discussions, answered all questions",
		"He was very helpful in discussion. He clearly explained concepts that Sean went over too quickly in lecture. Sometimes his accent makes it hard to understand but that doesn't make him a bad TA at all.",
		"Very hard to understand. Not even worth going to his discussions.",
		"I learn a lot from this TA",
		"Could be confusing and hard to understand, but was good enough at teaching.",
		"The TA definitely knows the material, except had some trouble communicating it to the class (talked fast at times, etc). Didn't go to discussion much so N/A",
		"Did not see this TA at all.",
		"The language barrier was a bit of an issue for me to understand. His way of teaching also sometimes differ from the instructor.",
		"Huanle was super helpful and did a good job clarifying what we were learning in lecture.",
		"He was good about summarizing most topics. Sometimes his examples were too simple to be useful to understand the steps of whatever we were learning.",
		"Hard to understand, didn't seem prepared for discussions most of the time.",
		"He was fairly effective.",
		"The information that he had to offer was helpful but his thick accent and speech patter made him very difficult to understand.",
		"can't understand him",
		"His accent makes it hard for me to understand anything.",
		"Actually there was only one TA we interacted with, so I don't know the other two.",
		"Oftentimes it is hard to understand him, but I felt that he enjoys both the topic and teaching.",
		"Was not available for office hours when I went a few times",
		"knowledgeable about the subject but his english was an issue for conveying ideas effectively",
		"Couldnt speak clearly. Learned concepts through the internet. Completely different than the book or Sean. Not helpful at all with our programs.",
		"He often didn't know what the homework assignments were even the day before the due dates, so students couldn't ask any questions about it in office hours/discussion.",
		"NA"
	];
	
	// window size 
	var w = 800;
	var h = 700;
	
	var htmlStr = "";
	htmlStr += "<h3><span class='course_self_comments'> " + self_comments + "</span></h3>";
	htmlStr += "<h4><span class='course_comment_intro'> " + comment_intro + "</span></h4>";
	htmlStr += "<ol>";
	for (var i = 0; i < student_comments.length; i++){
		htmlStr += "<li> " + student_comments[i] + "</li>";
	}
	htmlStr += "</ol>";
	
	htmlStr += "<button type='button' onclick='window_ecs60_ucdavis_remove()'> Close </button>";
	
	// show in center of window 
	var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
    var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height *2 / 3) - (h / 2)) + dualScreenTop;
	
	var newMainDiv = document.createElement('div');
	newMainDiv.id = "window_ecs60_ucdavis";
	newMainDiv.className = "window_course_evaluation_div";
	newMainDiv.innerHTML = htmlStr;
	newMainDiv.style.width = w+'px';
	newMainDiv.style.height = h+'px';
	newMainDiv.style.position = "absolute";
	newMainDiv.style.left = left+'px';
	newMainDiv.style.top = top+'px';
	document.body.appendChild(newMainDiv);
}

function window_ecs60_ucdavis_remove(){
	$('#window_ecs60_ucdavis').remove();
}