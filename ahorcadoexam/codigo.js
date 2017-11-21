
//Numero errores
  var numerror=prompt('Cuantos erros desea tener entre 5 y 10');

  if (isNaN(numerror)) {
  alert("debes introducir un numero")
  var numerror=prompt('Cuantos erros desea tener entre 5 y 10');
  }
  else {
  while (numerror<5 || numerror>10) {
  alert("Los errores tienen que ser entre 5 y 10");
  numerror=prompt('Cuantos errores desea tener');
  }
  }


  //Array
  var Array1=["picaporte","farola","ludado","huevon","parkineo"];
  var aleatorio= Math.floor(Math.random()*Array1.length);
  var adivinar= Array1[aleatorio]
  console.log(adivinar)
//Variables
  var palabra0=[];
  var  condicion=true;
  var conterror=0;
  var contacert=0;
  var contfin=0;
//palabra en numero 0
  console.log(palabra0)
  for (var i = 0; i < adivinar.length; i++) {
    palabra0[i]="0";
  }
//while para el ahorcado
  while (conterror<numerror && contacert<adivinar.length && contfin<1) {
    var letrauser=prompt("Dame una letra");


    var condicion=false
    for (var i = 0; i < adivinar.length; i++) {
      if (letrauser==adivinar.charAt(i)){
          palabra0[i]=letrauser
          condicion=true;
          contacert++;
        }     else {

  }
  }
        if (condicion) {
              alert("Has acertado")

            }

            else if (letrauser=="FIN") {
              alert("talue")
              contfin++
            }
            else {
              alert("has fallado")
              conterror++
            }
}




//consoles para visualizar
  console.log(palabra0)
  console.log(contacert)
  console.log(conterror)
