function validar(){
  var vacio= "";

  var nombre= document.getElementById("nombre").value;
  var apellidos= document.getElementById("apellidos").value;
  var edad= document.getElementById("edad").value;
  var curso= document.getElementById("curso").value;
  var puntuacion= document.getElementById("puntuacion").value;
  if (nombre==vacio) {
    alert('complete los campos');
    return false;
  }else if (apellidos==vacio) {
    alert('complete los campos')
  }else if (edad==vacio) {
    alert('complete los campos')
  }
    else if (curso==vacio) {
  alert('complete los campos')
}
else if (texto==vacio) {
  alert('complete los campos')
}
else {
    return true;
}
}
