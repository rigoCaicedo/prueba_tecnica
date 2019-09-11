var pathname = "http://localhost/prueba_tecnica/public",
    token = $('meta[name="_token"]').attr('content')

$('#new-cotizacion').submit(function(event) {
  var response = true;
  if($('#clientes').val()==0){
  	alert('Debe seleccionar un cliente!');
  	response = false;
  }
  if($('#servicios').val()==0){
  	alert('Debe seleccionar un servicio!');
  	response = false;
  }

  return response;
});