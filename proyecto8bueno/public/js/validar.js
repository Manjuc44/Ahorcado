function validar(){
  var vacio= "";

  var nombre= document.getElementById("nombre").value;
  var apellidos= document.getElementById("apellidos").value;
  var usuario= document.getElementById("usuario").value;
  var contrasenya= document.getElementById("contransenya").value;
  var edad= document.getElementById("edad").value;
  var curso= document.getElementById("curso").value;
  var puntuacion= document.getElementById("puntuacion").value;
  var correo= document.getElementById("correo").value;
  if (nombre==vacio) {
    alert('complete los campos');
    return false;
  }else if (apellidos==vacio) {
    alert('complete los campos');
    return false;
  }else if (usuario==vacio) {
    alert('complete los campos');
    return false;
  }else if (contrasenya==vacio) {
    alert('complete los campos');
    return false;
  }else if (edad==vacio) {
    alert('complete los campos');
    return false;
  }else if (curso==vacio) {
  alert('complete los campos');
  return false;
}else if (puntuacion==vacio) {
  alert('complete los campos');
  return false;
}else if (correo==vacio) {
  alert('complete los campos');
  return false;
}else if (texto==vacio) {
  alert('complete los campos');
  return false;
}
else {
    return true;
}
}
