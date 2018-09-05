$(document).ready(function () {

/*HAMBURGUER*/

var count = 0;
 $("#hamburguer").click(function () {
     if (count % 2 === 0) {

       $(".menu").animate({
         opacity: 1,
         left: '5vh'
         });

     } else {

       $(".menu").animate({
         opacity: 0,
         left: '-5vh'
         });
         }
         count++;
 });

/*PALUPELOMUNDO*/


var bol = ["true", "false"];
var al;
var scene = document.getElementsByClassName("scene");

for (var i = 0; i < scene.length; i++) {

  al = bol[Math.floor(Math.random() * bol.length)];

var parallaxInstance = new Parallax(scene[i], {
invertX: al,
inverY: al,


});

}

//var margin = ["160px", "20px", "80px", "40px" , "-80px", "-40px"];
var margin = ["20%","40%","60%","0%"];

var elements = document.getElementsByClassName("worldphoto");
var rand;

for (var i = 1; i < elements.length; i++) {

  if($( elements[i]).is( ".big" )){

  $(elements[i]).css("margin-left" , "none");


} else {
  rand = margin[Math.floor(Math.random() * margin.length)];
  $(elements[i]).css("margin-left" , rand);
}

  }






});
