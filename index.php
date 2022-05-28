<?php



 ?>


 <!DOCTYPE html>
 <html>
 <head>
  <link rel="stylesheet" href="design.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Open+Sans&?family=Poppins&family=Open+Sans&display=swap" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-latest.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


 <script type="text/javascript">

 function ingresar(){
   name = document.getElementById('user').value;
   pw = document.getElementById('pw').value;

   if(name == "ZooAdmin" && pw == "123"){
     window.location.href = "admin.php";
   }
 }

 </script>


 </head>

 <body >

   <div class="imagen">
     <img style="width:100%" src="lemur.jpg"/>
   </div>

   <div class="welcome" >

     <p style="font-size:300%;"> Zoo Management App</p>
     <p style="color:#DB2453; font-size:180%;">Welcome</p>

     <input type="text" class="inputfield"  placeholder="Username" name ="user" id = "user"/> </br></br>
     <input type="password" class="inputfield"  placeholder="Password" name ="pw" id = "pw"/></br></br></br></br>

     <div class="button" onclick="ingresar()">Log In</div>



   </div>

 </body>
 </html>
