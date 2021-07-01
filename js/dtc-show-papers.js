/*
* Show all or recent papers
*
* Huanle Zhang, University of California, Davis
* www.huanlezhang.com
* 06-30-2021
*/

/* --- Configurations --- */

var conferencePaperShowRecent10ID = "conferenceRecent10Btn";
var conferencePaperShowAllID = "conferenceAllBtn";
var conferenceLiClass = "conf_li";

/* --- end of configurations --- */

var freqSlider = null;
var freqValue = null;

var audioContext = null;
var oscillator = null;

$(function(){

  var $conferenceLi = $("." + conferenceLiClass);
  for(let i = 10; i < $conferenceLi.length; i++) {
    $conferenceLi[i].style.display = "none";
  }
});

function dtcConferencePaperShowRecent10() {

  $("#" + conferencePaperShowRecent10ID)[0].disabled = true
  $("#" + conferencePaperShowAllID)[0].disabled = false;

  var $conferenceLi = $("." + conferenceLiClass);

  for(let i = 10; i < $conferenceLi.length; i++) {
    $conferenceLi[i].style.display = "none";
  }


}

function dtcConferencePaperShowAll() {
  $("#" + conferencePaperShowRecent10ID)[0].disabled = false
  $("#" + conferencePaperShowAllID)[0].disabled = true;

  var $conferenceLi = $("." + conferenceLiClass);

  for(let i = 10; i < $conferenceLi.length; i++) {
    $conferenceLi[i].style.display = "list-item";
  }
}
