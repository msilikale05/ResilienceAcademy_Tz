$(document).ready(function(){
	console.log('every thing is ready');
    $(".js-include").each(function(){
        $(this).load($(this).attr("title"));
    });
});

window.onscroll = () => {
  const nav = document.querySelector('#gtl-site-navigation');
  if(this.scrollY <= 10) nav.className = 'navmenu navbar navbar-inverse navbar-fixed-top'; 
  else nav.className = 'scroll navbar navbar-inverse navbar-fixed-top';
};


function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
function speakerTwo() {
    var popup = document.getElementById("myPopup1");
    popup.classList.toggle("show");
}
function speakerThree() {
    var popup = document.getElementById("myPopup2");
    popup.classList.toggle("show");
}
function speakerFour() {
    var popup = document.getElementById("myPopup3");
    popup.classList.toggle("show");
}
function speakerFive() {
    var popup = document.getElementById("myPopup4");
    popup.classList.toggle("show");
}