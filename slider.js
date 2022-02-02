                                                        /*Side Menu
..................................................................................................................................*/

function openNav() {
    document.getElementById("mySidenav").style.width = "280px";
    
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  function openNav1()
  {
      document.getElementById("mySidenav1").style.width = "280px";
      document.getElementById("mySidenav").style.width = "0";
  }

  function closeNav1()
  {
      document.getElementById("mySidenav1").style.width = "0";
      document.getElementById("mySidenav").style.width = "280px";
  }
  function openNav2()
  {
      document.getElementById("mySidenav2").style.width = "280px";
      document.getElementById("mySidenav").style.width = "0";
  }

  function closeNav2()
  {
      document.getElementById("mySidenav2").style.width = "0";
      document.getElementById("mySidenav").style.width = "280px";
  }
  function openNav3()
  {
      document.getElementById("mySidenav3").style.width = "280px";
      document.getElementById("mySidenav").style.width = "0";
  }

  function closeNav3()
  {
      document.getElementById("mySidenav3").style.width = "0";
      document.getElementById("mySidenav").style.width = "280px";
  }
  function openNav4()
  {
      document.getElementById("mySidenav4").style.width = "280px";
      document.getElementById("mySidenav").style.width = "0";
  }

  function closeNav4()
  {
      document.getElementById("mySidenav4").style.width = "0";
      document.getElementById("mySidenav").style.width = "280px";
  }
  function openNav5()
  {
      document.getElementById("mySidenav5").style.width = "280px";
      document.getElementById("mySidenav").style.width = "0";
  }

  function closeNav5()
  {
      document.getElementById("mySidenav5").style.width = "0";
      document.getElementById("mySidenav").style.width = "280px";
  }
  function openNav6()
  {
      document.getElementById("mySidenav6").style.width = "280px";
      document.getElementById("mySidenav").style.width = "0";
  }

  function closeNav6()
  {
      document.getElementById("mySidenav6").style.width = "0";
      document.getElementById("mySidenav").style.width = "280px";
  }


var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "inline";  
}



