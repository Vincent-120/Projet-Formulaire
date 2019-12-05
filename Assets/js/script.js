// var chaine = "Hackeurs Poulette"; 
// var nb_car = chaine.length; 
// var tableau = chaine.split("");
// texte = new Array;
// var txt = '';
// var nb_msg = nb_car - 1;
// for (i=0; i<nb_car; i++) {
// texte[i] = txt+tableau[i];
// var txt = texte[i];
// }

// actual_texte = 0;
// function changeMessage()
// {
// document.getElementById("h1").innerHTML = texte[actual_texte];
// actual_texte++;
// if(actual_texte >= texte.length)
// actual_texte = nb_msg;
// }
// if(document.getElementById)

// setInterval("changeMessage()",200) /* la vitesse de defilement (plus on a une valeur faible plus 
// texte s'affiche rapidement) */

// var form = document.querySelector("form");
// var log = document.querySelector("#log");

// form.addEventListener("submit", function(event) {
//   var data = new FormData(form);
//   var output = "";
//   for (const entry of data) {
//     output = entry[0] + "=" + entry[1] + "\r";
//   };
//   log.innerText = output;
//   event.preventDefault();
// }, false);

//AU DESSUS C4EST UNE VIELLE ANNIMATION

let letters = document.getElementsByClassName('title-letter');

setTimeout(() => {
  for (let i = 0; i < letters.length; i++) {
    anime({
      targets: letters[i],
      easing: 'easeInQuad',
      translateX: ['5px', '0'],
      delay: 50 * i
    });

    anime({
      targets: letters[i],
      easing: 'easeInQuad',
      opacity: 1,
      delay: 60 * i,
      complete: function(anim) {
        if (i === letters.length - 1) {
          showSubTitle()
        }
      }
    });
  }
}, 500);


function showSubTitle() {
  anime({
    targets: '#sub-title',
    easing: 'easeInQuad',
    opacity: 1,
    duration: 300,
    delay: 1
  });
}