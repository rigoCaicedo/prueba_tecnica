//validaciones para crear cliente
$('#new-cliente').submit(function(event) {
  var response = true;

  if($('#nombre_cliente').val()==""){
  	alert('Debe rellenar el campo nombre!');
  	response = false;
  }
  if($('#apellido_cliente').val()==""){
  	alert('Debe rellenar el campo apellido!');
  	response = false;
  }
  if($('#regiones').val()==0){
  	alert('Debe seleccionar una region!');
  	response = false;
  }
  return response;
});


//validaciones para editar cliente
$('#edit-cliente').submit(function(event) {
  var response = true;
  
  if($('#nombre_cliente').val()==""){
  	alert('Debe rellenar el campo nombre!');
  	response = false;
  }
  if($('#apellido_cliente').val()==""){
  	alert('Debe rellenar el campo apellido!');
  	response = false;
  }
  if($('#regiones').val()==0){
  	alert('Debe seleccionar una region!');
  	response = false;
  }

  return response;
});