$api_key = "3ebe8a5d18210ba6c72544c6e6fd7f2d";

var url = "https://api.themoviedb.org/3/tv/popular?api_key=" + $api_key + "&language=es&page=1";

function cargarPeliculas(){

	fetch(url).then( 
			function( response ) { 
				return response.json();
			} 
		).then(
			function( data ){
				mostrarJsonEnLista( data );
				mostrarJsonEnCombo( data );
				mostrarJsonEnTabla( data );
			}
		);


}

function mostrarJsonEnLista( json ){
	

	var html = "<ul>";
	
	json.results.map( function(pelicula) { 

		html += "<li>" + pelicula.name + "</li>";

	} );

	document.getElementById("peliculas").innerHTML = ( html + "</ul>");
	
}

function mostrarJsonEnCombo( json ){
	
	var html = "<select>";

	json.results.map( function(pelicula) { 
		
		html += "<option value=\"" + pelicula.id + "\">" + pelicula.name + "</option>";		
	
		console.log(html);

	} );


	document.getElementById("peliculas").innerHTML += ( html + "</select>");
}

function mostrarJsonEnTabla( json ){
	
	var html = "<table border=1 style=\"width:100%\">";
	  html += "<tr>";
	  html += "	<th>Sinopsis</th>";
	  html += "	<th>id</th>";
	  html += " <th>Título</th>";
	  html += " <th>Lanzamiento</th>";	    
	  html += "</tr>";
	
	json.results.map( function(pelicula) { 
		
		html += "<tr><td>" + pelicula.overview + "</td>";
		html += "<td>" + pelicula.id + "</td>";
		html += "<td>" + pelicula.name + "</td>";
		html += "<td>" + pelicula.first_air_date + "</td>";
		html += "</tr>";
	} );  

	  document.getElementById("peliculas").innerHTML += ( html + "</table>");    
}