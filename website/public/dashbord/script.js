var link = document.querySelectorAll(".navbar-right .dropdown > a");
link[0].onfocus = function(){
  'use strict';
  link[0].style.backgroundColor = "#2980b9";
  link[0].style.color = "#fff";
}
link[0].onblur = function(){
  'use strict';
  link[0].style.backgroundColor = "transparent";
  link[0].style.color = "#ccc";
}
