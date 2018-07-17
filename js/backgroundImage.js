$(document).ready(function () {

 var src = ["url(images/1.jpg)", "url(images/2.jpg)", "url(images/3.jpg)", "url(images/4.jpg)"];
 var rand = src[Math.floor(Math.random() * src.length)];

$("body").css("background-image" , rand);
$("body").css("background-size" , "100vw");

});
