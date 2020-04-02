// JavaScript Document
//<![CDATA[
window.onscroll = function() {myFunction()};

var nav = document.getElementById("main_nav");
var sticky = nav.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    nav.classList.add("sticky");
  } else {
    nav.classList.remove("sticky");
  }
}

$(document).ready(function() {
	"use strict";
	$('#navPhone').click(function(){
		$('#navPhoneMenu').slideToggle(300);
	});//end click function

});//end document.ready




//]]>
