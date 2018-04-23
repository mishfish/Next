// Change the size of navbar when user is scrolling down
window.addEventListener('scroll', addClassSmallForNavBar);

function addClassSmallForNavBar(){
 let html = document.documentElement, body = document.body;
 let logoStyle = document.getElementById('logo-argo').style;
 let brandStyle = document.getElementsByClassName('navbar-brand')[0].style;
 let togglerStyle = document.getElementsByClassName('navbar-toggler')[0].style;
 
 if($(window).width() > 350) {
  if(body.scrollTop>300 || html.scrollTop>300) { 
      logoStyle.height="2em";
      logoStyle.width="2.6em";
      brandStyle.fontSize="1em";
      togglerStyle.fontSize="1em";
  }
  else {
      logoStyle.height="inherit";
      logoStyle.width="inherit";
      brandStyle.fontSize="inherit";
      togglerStyle.fontSize="inherit";
  }
 }
}

// Change style of the current page in navbar
$(function activeClassToNavBar() {
  $('.navbar-nav a').each(function() {
    if (($(this).prop('href').toString()).indexOf((location.pathname.slice(1).toString())) !== -1) {
      $(this).parent('li').addClass('active');
      return false;
    }
  });
});


