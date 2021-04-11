window.onscroll = function() {scrollFunction()};
var n=-200;
function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("header-menu").style.top = "0";
    document.getElementById("header-menu").style.padding = "0px";
  } else {
    document.getElementById("header-menu").style.top = "-200px";
  }
  if(document.body.scrollTop > 1350   || document.documentElement.scrollTop > 1350){
       $(".new-img1 img").attr("style","left: 0px;opacity: 1;");
  }
  if(document.body.scrollTop > 900   || document.documentElement.scrollTop > 900){
       $(".bg-img img").attr("style","top: 0%; opacity: 1;");
  }
  if(document.body.scrollTop > 900   || document.documentElement.scrollTop > 900){
       $(".bg-img3 img").attr("style","top: 0%; opacity: 1;");
  }
  }
  function one_star(){
    location.href = window.location.href+"&key7=1";
  }
  function two_star(){
    location.href = window.location.href+"&key7=2";
  }
  function three_star(){
    location.href = window.location.href+"&key7=3";
  }
  function four_star(){
    location.href = window.location.href+"&key7=4";
  }
  function five_star(){
    location.href = window.location.href+"&key7=5";
  }
//    function one_star() {
//   var element = document.getElementsByClassName("fa-star");
//   for(var i=0;i<5;i++){
//     element[i].classList.remove("active");
//   }
//    element[0].classList.add("active");
//    document.getElementById("current-star").innerHTML = "1 star";
// }
// function two_star() {
//   var element = document.getElementsByClassName("fa-star");
//   for(var i=0;i<5;i++){
//     element[i].classList.remove("active");
//   }
//   for(var i=0;i<2;i++){
//     element[i].classList.add("active");
//   }
//   document.getElementById("current-star").innerHTML = "2 star";
// }
// function three_star() {
//   var element = document.getElementsByClassName("fa-star");
//   for(var i=0;i<5;i++){
//     element[i].classList.remove("active");
//   }
//    for(var i=0;i<3;i++){
//     element[i].classList.add("active");
//   }
//   document.getElementById("current-star").innerHTML = "3 star";
// }
// function four_star() {
//   var element = document.getElementsByClassName("fa-star");
//   for(var i=0;i<5;i++){
//     element[i].classList.remove("active");
//   }
//    for(var i=0;i<4;i++){
//     element[i].classList.add("active");
//   }
//   document.getElementById("current-star").innerHTML = "4 star";
// }
// function five_star() {
//   var element = document.getElementsByClassName("fa-star");
//   for(var i=0;i<5;i++){
//     element[i].classList.remove("active");
//   }
//   for(var i=0;i<5;i++){
//     element[i].classList.add("active");
//   }
//   document.getElementById("current-star").innerHTML = "5 star";
// }
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
function openLogin() {
  document.getElementById("login").style.display = "block";
  document.getElementById("login").style.height = "100%";
}

function closeLogin() {
  document.getElementById("login").style.height = "0%";
}
function openSignUp() {
  document.getElementById("sign_up").style.display = "block";
  document.getElementById("sign_up").style.height = "100%";
}

function closeSignUp() {
  document.getElementById("sign_up").style.height = "0%";
}
function changeLogin() {
	document.getElementById("login").style.height = "100%";
	document.getElementById("sign_up").style.display = "none";
	document.getElementById("login").style.display = "block";
}
function changeSignUp() { 
	document.getElementById("login").style.display = "none";
	document.getElementById("sign_up").style.display = "block";
	document.getElementById("sign_up").style.height = "100%";
}
$(function() {
    $('#hiep1').carousel({
         interval: 100000000000000
    })

$('#carouselExampleIndicators').carousel({
         interval: 3000
    })
$('#carouselExampleControls1').carousel({
         interval: 10000
    })
 })
function openZoomImg() {
  document.getElementById("zoom_img").style.height = "100%";
}
function closeZoomImg() {
  document.getElementById("zoom_img").style.height = "0%";
}
mybutton = document.getElementById("topFunction");

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
$(function(){
var x=0,y=0,z=0;
  $(".ModifySearch").click(function(){
    if(x%2!=0){
      $(".ModifySearch1").slideDown();
    }
    else
     $(".ModifySearch1").slideUp();
    x++;
  });
  $(".Price").click(function(){
    if(y%2!=0){
      $(".Price1").slideDown();
    }
    else
     $(".Price1").slideUp();
    y++;
  });
  $(".UserReviews").click(function(){
    if(z%2!=0){
      $(".UserReviews1").slideDown();
    }
    else
     $(".UserReviews1").slideUp();
    z++;
  });
});
      