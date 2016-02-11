var navicon = document.getElementById('navicon');
var navEl = document.getElementById('subNav');

 function toggleMenu(){
   navEl.classList.toggle('active');
};

navicon.addEventListener("click", toggleMenu, false);