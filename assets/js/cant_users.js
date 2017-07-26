var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
  if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    document.getElementById('cant_users').innerHTML = "¡Ya somos " + xmlhttp.responseText + " usuarios registrados!";
  }
}
xmlhttp.open('GET','get_users.php',true);
xmlhttp.send();

// Cada 30 segundos va a refrescar el contenido del id="cant_users" con el setInterval que sigue:

    setInterval(function(){
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function () {
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              document.getElementById('cant_users').innerHTML = "¡Ya somos " + xmlhttp.responseText + " usuarios registrados!";
            }
          }
          xmlhttp.open('GET','get_users.php',true);
          xmlhttp.send();

    }, 30000);
