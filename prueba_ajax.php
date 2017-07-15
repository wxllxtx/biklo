<html>
<head>
</head>
<body>

  <div id="cant_users">
    aqui veras las provincias
  </div>


  <script>

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('cant_users').innerHTML = xmlhttp.responseText;
          }
        }


        xmlhttp.open('GET','get_users.php',true);
        xmlhttp.send();

      

  </script>
</body>
</html>
