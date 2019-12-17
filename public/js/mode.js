var tema = document.getElementById('tema');
var cuerpo = document.getElementById('body');
var destacadoscarrouselback = document.getElementById('destacadoscarrouselback');
var destacadoscarrousel = document.getElementById('destacadoscarrousel');
var linkproductos = document.getElementById('linkproductos');
var rowIndex = document.getElementById('rowIndex');
var cardDestacados = document.getElementById('cardDestacados');
var theme = document.getElementById('result');
storagetheme = localStorage.getItem("storagetheme");

if(storagetheme == 'oscuro'){
result.innerHTML += 'oscuro';
$(cuerpo).addClass( "black" );
}else{result.innerHTML += 'claro'}

if(storagetheme == 'oscuro'){
result.innerHTML += 'oscuro';
$(cardDestacados).addClass( "black" );
}else{result.innerHTML += 'claro'}

if(storagetheme == 'oscuro'){
result.innerHTML += 'oscuro';
$(rowIndex).addClass( "black" );
}else{result.innerHTML += 'claro'}

if(storagetheme == 'oscuro'){
result.innerHTML += 'oscuro';
$(linkproductos).addClass( "black" );
}else{result.innerHTML += 'claro'}

if(storagetheme == 'oscuro'){
result.innerHTML += 'oscuro';
$(destacadoscarrousel).addClass( "black" );
}else{result.innerHTML += 'claro'}

if(storagetheme == 'oscuro'){
result.innerHTML += 'oscuro';
$(destacadoscarrouselback).addClass( "black" );
}else{result.innerHTML += 'claro'}


$(tema).click(function() {
  $( cuerpo ).toggleClass( "black" );
  revisartema();
});

$(tema).click(function() {
  $( cardDestacados ).toggleClass( "black" );
  revisartema();
});

$(tema).click(function() {
  $( rowIndex ).toggleClass( "black" );
  revisartema();
});

$(tema).click(function() {
  $( linkproductos ).toggleClass( "black" );
  revisartema();
});

$(tema).click(function() {
  $( destacadoscarrousel ).toggleClass( "black" );
  revisartema();
});

$(tema).click(function() {
  $( destacadoscarrouselback ).toggleClass( "black" );
  revisartema();
});


function revisartema(){
storagetheme = localStorage.getItem("storagetheme");
if(storagetheme == 'oscuro'){
    localStorage.setItem("storagetheme", "claro");
    result.innerHTML = 'cala';
    return false;
}
if(storagetheme == 'claro'){
    localStorage.setItem("storagetheme", "oscuro");
}
if(storagetheme == null){
    localStorage.setItem("storagetheme", "oscuro");
}
    result.innerHTML = 'oscuro';

}
