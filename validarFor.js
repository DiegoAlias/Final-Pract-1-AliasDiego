  function validar() {
  var nro_de_Corredor, apellido, nombre, fecha_de_inscripcion, categoria;

  nro_de_Corredor = document.getElementById("nro_de_Corredor").value;
  apellido = document.getElementById("apellido").value;
  nombre = document.getElementById("nombre").value;
  fecha_de_inscripcion = document.getElementById("fecha_de_inscripcion").value;
  categoria = document.getElementById("categoria").value;

  if (categoria === "" || nro_de_Corredor === "" || nombre === "" || apellido === "" || fecha_de_inscripcion === "") {
    alert("Todos los campos son obligatorios");
    return false;
    
  } else if (nombre.length > 30) {
    alert("El nombre es muy largo");
    return false;
  }
  
  else if (apellido.length > 30) {
    alert("El apellido es muy largo");
    return false;

  } else if (isNaN(nro_de_Corredor)) {
    alert("El número ingresado no es correcto");
    return false;
  }

  if (nro_de_Corredor < 100 || nro_de_Corredor > 1000) {
    alert("Ingrese un número entre 100 y 1000");
    return false;
  }

  var formulario = document.getElementById(
    "electro" && "ergonometria" && "rayosTorax"
  ).checked;
  if (formulario === false) {
    alert("Se deben tildar todos los estudios requeridos");
    return false;
  }
}

function soloLetras(e) {
  var key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
  especiales = [8, 37, 38, 46, 164];
  tecla_especial = false;

  for (var i in especiales) {
    if (key == especiales[i]) {
      tecla_especial = true;
      break;
    }
  }

  if (letras.indexOf(tecla) == -1 && !tecla_especial) {
    return false;
  }

  
}
