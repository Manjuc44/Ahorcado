//Array
var Array1=["picaporte","farola","ludado","huevon","parkineo"];
var aleatorio= Math.floor(Math.random()*Array1.length);
var adivinar= Array1[aleatorio]
console.log(adivinar)
//Variable
var palabra0=[];
var  condicion=true;
var conterror=0;
var contacert=0;
var boton=document.getElementById("button");

console.log(palabra0)
for (var i = 0; i < adivinar.length; i++) {
  palabra0[i]="0";
}

  function mostrarMensaje() {
      var acert=false;
      var usertext="";
      usertext = letrauser.value;
        if (isNaN(usertext)) {
          for (var i = 0; i < adivinar.length; i++) {
            if (adivinar.charAt(i)==usertext) {
              palabra0[i]=adivinar.charAt(i);
              acert=true;
             contacert++;
          }
          salida2.value=palabra0;
          if (contacert>=adivinar.length) {
                salida2.value="Felicidades has acertado la palabra y es: "+adivinar
                boton=document.getElementById("button").disabled=true;
          } else if (conterror>=5) {
                salida2.value="No lo has conseguido..."
                boton=document.getElementById("button").disabled=true;
          }
              letrauser.value="";
          }
          if (acert==true) {
                salida.value="Has acertado la letra";
          } else {
                salida.value="No has acertado";
                conterror++;
                salida3.value=salida3.value+usertext+"-";
          }
           console.log(palabra0);
           console.log(conterror);
        }  else {
              salida.value="Una letra por favor";

        }
    }
