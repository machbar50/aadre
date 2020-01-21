var url = "getrevistas.php";

function cargarRevistasV1(){

	fetch(url).then( 
			function( response ) { 
				return response.json();
			} 
		).then(
			function( data ){
				mostrarJsonEnLista( data, "titulo", "revistas", true );				
				mostrarJsonEnCombo( data, "titulo", "revistas", "claedi" );
			}
		);
}

async function cargarRevistas(){
	var response = await fetch(url);
	var data     = await response.json();

	mostrarJsonEnLista( data, "titulo", "revistas", true );				
	mostrarJsonEnCombo( data, "titulo", "revistas", "claedi" );

	document.getElementById("revistas").classList.replace("fondo-amarillo", "fondo-rojo");
	document.getElementById("revistas").classList.add("texto-azul");

	document.getElementById("revistas").style.border = "1px solid blue";
}

function mostrarJsonEnCombo( datos, campoMostrar, idContenedor, idCampo, borrarContenedor = false ){	
	
	var html = "<select>";

	datos.map( function(item) { 
		
		html += "<option value=\"" + item[idCampo] + "\">" + item[campoMostrar]
		console.log(html);

	} );

	if ( borrarContenedor ){
		document.getElementById(idContenedor).innerHTML = "";
	}

	document.getElementById(idContenedor).innerHTML += ( html + "</select>");
}

function mostrarJsonEnLista( datos, campoMostrar, idContenedor, borrarContenedor = false  ){
	

	var html = "<ul>";
	
	datos.map( function(item) { 

		html += "<li>" + item[campoMostrar] + "</li>";

	} );

	if ( borrarContenedor ){
		document.getElementById(idContenedor).innerHTML = "";
	}

	document.getElementById(idContenedor).innerHTML += ( html + "</ul>");
	
}

function nuevaParaBorrar(){
	
}