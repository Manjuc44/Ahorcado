alert("adivina la letra");
var letraUsuario = prompt ("introduce letra: ");
var letraAleatoria = String.fromCharCode(aleat(97,122));
var intentos = 0;
console.log(letraAleatoria);
function aleat(letraAleatoria){
  letraAleatoria= 122 - 97 + 1;
  aleat = Math.random() * letraAleatoria;
  aleat = Math.floor(aleat);
  return parseInt(97) + aleat;
}
while ((letraAleatoria != letraUsuario) && (intentos<4)){
  letraUsuario = prompt("Introduce otra letra");
  intentos++;
}
if (letraUsuario == letraAleatoria){
  document.write ("Has acertado, la letra es: ",letraAleatoria);

} else {
document.write("has fallado, la letra era: ", letraAleatoria);
}
