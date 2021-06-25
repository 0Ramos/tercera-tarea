function mostrar(){
	$.ajax({
		type:"POST",
		url:"./../../procesos/tienda/mostrar.php",
		success:function(r){
			$('#tablaDatos').html(r);
		}
	});
}
function obtenerDatos(id_ti){
	$.ajax({
		type:"POST",
		data:"id_ti=" + id_ti,
		url:"../../procesos/tienda/obtener.php",
		success:function(r){
			r=jQuery.parseJSON(r);
			$('#id_ti').val(r['id_ti']);
			$('#nom_tiu').val(r['nom_ti']);
			$('#nom_prop_tiu').val(r['nom_prop_ti']);
			$('#direc_tiu').val(r['direc_ti']);
			$('#telf_tiu').val(r['telf_ti']);
			$('#rubro_tiu').val(r['rubro_ti'])
		}
	});
}
function actualizarDatos(){
	$.ajax({
		type:"POST",
		url:"../../procesos/tienda/actualizar.php",
		data:$('#frminsertu').serialize(),
		success:function(r){
			console.log(r)
			if(r==1){
				mostrar();
				swal("Actualizado con exito!", ":D", "success");
			}else{
				swal("¡Errror!",":(","error")
			}
		}
	});
	return false;
}
function eliminarDatos(id_ti){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"../../procesos/tienda/eliminar.php",
				data:"id_ti="+id_ti,
				success:function(r){
                    console.log(r);
					if(r==1){
						mostrar();
						swal("Eliminado con exito!", ":D", "success");
					}else{
						swal("¡Errror!",":(","error")
					}
				}
			});
		} 
	});
}
function insertarDatos(){
	$.ajax({
		type:"POST",
		url:"../../procesos/tienda/insertar.php",
		data:$('#frminsert').serialize(),
		success:function(r){
            console.log(r);
			if(r==1){
				$('#frminsert')[0].reset;//limpiar formulario
				mostrar();
				swal("¡Agregado con exito!", ":D", "success");
			}else{
				swal("¡Errror!",":(","error")
			}
		}
	});
	return false;
}