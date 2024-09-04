<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
  </head>
  <body>
    <style>
      *{margin: 0;padding: 0;}
    </style>
    <div id="gtrx" style="height:100vh;text-align:center">
        <img id="lg01" src="logo.png" style="display: inline-block;margin-top: 80px;width:380px;"><br>
        <div onclick="ldfrm()" id="gtr01" style="margin-top: 20px;display: inline-block; width: 373px;height:600px;background-image:url(1.svg);box-shadow:0 2px 6px rgba(0,0,0,.2);background-repeat:no-repeat;">
            
        </div>
        
    </div>
    <style>
        @media only screen and (max-width: 500px){
            #gtr01{
                /*zoom:90%;*/
                border:none !important;
                box-shadow:none!important;
            }
            #lg01{
              /*zoom:90%;*/
            }
        }
    </style>
    <script>
        function ldfrm() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("gtr01").innerHTML = this.responseText; 
                document.getElementById("gtr01").onclick = null;
                }
            };
            xhttp.open("GET", "gf3.html", true);
            xhttp.send();
        }
    </script>
  </body>
</html>