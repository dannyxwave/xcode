/*jslint browser: true*/
//"use strict";

//Var
var logoH1 = $('#logoH1');
var currentdate = new Date();


/**************************************************************************************/

//Legg inn selector tag og navn slik som i jQuery. Eks" $(".x"); ", da returneres innholdet fra dom.
function $(classOrId) {
    return document.querySelector(classOrId);
}
//Returnerer style - da er det bare å legge til eks: .color = "blue" -
//Eks: s(exploreP).letterSpacing = '1rem';
function s(i) {
    return i.style;
}

// alert(currentdate);
setInterval(function () {
  // $('#dater').innerHTML = new Date().toLocaleString();
  $('#dater').innerHTML = new Date().toLocaleTimeString();
}, 100);

/*Logo change by hover*/
function a(){
  logoH1.classList.add('bounceIn');
  setTimeout(function () {
    logoH1.classList.remove('bounceIn');
  }, 700);
}
logoH1.addEventListener('mouseover', a );
// logoH1.addEventListener('mouseleave', a );
