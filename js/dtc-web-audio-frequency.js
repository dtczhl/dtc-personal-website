/*
* Play sounds of frequencies on web
*
* Huanle Zhang, University of California, Davis
* www.huanlezhang.com
* 07-23-2019
*/

/* --- Configurations --- */

var freqSliderID = "freqSlider";
var freqTextID = "freqValue";
var freqStartBtnID = "freqStart";
var freqStopBtnID = "freqStop";

/* --- end of configurations --- */

var freqSlider = null;
var freqValue = null;

var audioContext = null;
var oscillator = null;

$(function(){
// main
  freqSlider = $("#" + freqSliderID)[0];
  freqValue = $("#" + freqTextID)[0];
  freqValue.innerHTML = freqSlider.value;
  freqSlider.oninput = function(){
    freqValue.innerHTML = this.value;
    if (oscillator != null) {
      oscillator.stop();
      oscillator = audioContext.createOscillator();
      oscillator.type = 'sine';
      oscillator.frequency.setValueAtTime(freqSlider.value, audioContext.currentTime); // value in hertz
      oscillator.connect(audioContext.destination);
      oscillator.start();
    }
  };
});


function dtcWebAudioFrequencyPlay(enable){

  if (enable) {
    $("#" + freqStartBtnID)[0].disabled = true;
    $("#" + freqStopBtnID)[0].disabled = false;
    try {
      audioContext = new (window.AudioContext || window.webkitAudioContext)();
    } catch (error) {
      window.alert("Sorry, but your browser doesn't support the Web Audio API!");
    }

    if (audioContext != null) {
      // create Oscillator node
      oscillator = audioContext.createOscillator();
      oscillator.type = "sine";
      oscillator.frequency.setValueAtTime(freqSlider.value, audioContext.currentTime); // value in hertz
      oscillator.connect(audioContext.destination);
      oscillator.start();
    }
  } else {
    $("#" + freqStartBtnID)[0].disabled = false;
    $("#" + freqStopBtnID)[0].disabled = true;
    if (oscillator !== null) {
    oscillator.stop();
    oscillator = null;
    }
  }
}
