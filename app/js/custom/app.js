"use strict";

function setVideo(url) {
    jQuery('#video-player').attr("src", url);
}
var _w = jQuery(window).width(),
_h = jQuery(window).height()

var deck_width = $("#sponsor-deck").css('width');
console.log(deck_width);
function setDeckWidth(){
    var deck_width = jQuery("#sponsor-deck").css('width'),
    deck_height = (parseInt(deck_width)*0.8)+"px"
    jQuery("#sponsor-deck").css('height',deck_height)
    console.log("deck",deck_width,deck_height)
}
jQuery(document).ready(function () {
     setDeckWidth()


    
  
  })
jQuery(window).resize(function () {
    setDeckWidth()

})

if(_w>1680){
    $("#sponsor-deck").css('width','800px');
    $("#sponsor-deck").css('width','644px');
} else{
    
}