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

console.log(palabra0)
for (var i = 0; i < adivinar.length; i++) {
  palabra0[i]="0";
}

while (conterror<5 && contacert<adivinar.length) {
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

          else {
            alert("Has fallado")
            conterror++
          }


  }
console.log(palabra0)
console.log(contacert)
console.log(conterror)
