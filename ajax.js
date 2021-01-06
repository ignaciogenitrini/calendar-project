// Variables en javascript

var btn_reload = document.getElementById('reload'),
    tabla = document.getElementById('tabla');

   

function loadProjects() {
    tabla.innerHTML = "<tr><th>Project</th><th>Date</th><th>Time</th><th>Task</th><th>Description</th></tr>";

    var peticion = new XMLHttpRequest();
    peticion.open('GET', 'leerdatos.php');

    peticion.onload = function() {
        var datos = JSON.parse(peticion.responseText);
        
        for (let i = 0; i <= datos.length; i++) {
            var elemento = document.createElement('tr');
            elemento.innerHTML += ("<td id='nameproject'>" + datos[i].proyecto + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].fecha + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].tiempo + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].tarea + "</td>");
            elemento.innerHTML += ("<td>" + datos[i].descripcion + "</td>");
            tabla.appendChild(elemento);
        }
    }

    peticion.onreadystatechange = function() {
        if (peticion.status == 200 && peticion.readyState == 4) {
            alert('Projects load success!');
        }
    }
    
    peticion.send();
}


btn_reload.addEventListener('click', function(){
    loadProjects();
});
