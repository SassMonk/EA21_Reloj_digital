<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <title> EA 21 Repostiorio GIT/ Reloj Digital </title>
  </head>

  <body>
    <div id = "clock" onload="currentTime();"></div>
    <div id="mensaje"> </div>

      <script type="text/javascript">

      function currentTime() {
        let date = new Date(); 
        let hh = date.getHours();
        let mm = date.getMinutes();
        let ss = date.getSeconds();
        let session = "AM";
osgoerigjoerijgvsvs
          
        if(hh > 12){
            session = "PM";
         }

         hh = (hh < 10) ? "0" + hh : hh;
         mm = (mm < 10) ? "0" + mm : mm;
         ss = (ss < 10) ? "0" + ss : ss;
          
         let time = hh + ":" + mm + ":" + ss + " " + session;

        document.getElementById("clock").innerText = time; 
        if(hh >= 5){
          document.getElementById("mensaje").innerText = "Buenos días";
        }
        if(hh >= 12){
          document.getElementById("mensaje").innerText = "Buenas tardes";
        }
        if(hh >= 19){
          document.getElementById("mensaje").innerText = "Buenas noches";
        }
        
        var t = setTimeout(function(){ currentTime() }, 1000); 


      }

      currentTime();
    </script>
  </body>
</html>
