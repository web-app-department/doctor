const navSlide = () => {
  const hamburger = document.querySelector(".hamburger");
  const nav = document.querySelector(".nav-links");
  const navLinks = document.getElementById('nav_links');
  var isHidden=true;

  hamburger.addEventListener("click", () => {
    //toggle nav
    nav.classList.toggle("nav-active");
    if(isHidden)
    {
      navLinks.style.display="flex";
      document.getElementsByClassName('logo')[0].style.paddingLeft='36px';
      document.getElementById('myNav').style.justifyContent="flex-start";

      isHidden=false;
    }
    else{
      navLinks.style.display="none";
      document.getElementById('myNav').style.justifyContent="space-around";
      document.getElementsByClassName('logo')[0].style.paddingLeft='0px';
      isHidden=true;
    }

    //burger animation
    hamburger.classList.toggle("toggle");

  });
};

navSlide();

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}