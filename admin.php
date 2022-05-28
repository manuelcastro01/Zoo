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

 function ChangeToAnimals(){

   document.getElementById('Emp').style.display = 'none';
   document.getElementById('An').style.display = 'Block';


 }

 function ChangeToEmployees(){

   document.getElementById('An').style.display = 'none';
   document.getElementById('Emp').style.display = 'Block';


 }

 function ingresar(){
   name = document.getElementById('user').value;
   pw = document.getElementById('pw').value;

   if(name == "ZooAdmin" && pw == "123"){
     window.location.href = "admin.php";
   }
 }

 function AddAnimal(){

   var animalId = document.getElementById('AId').value;
   var animalName = document.getElementById('AName').value;
   var animalSpecie = document.getElementById('Specie').value;
   var animalAge = document.getElementById('AnimalAge').value;
   var animalGender = document.getElementById('AGender').value;

   const information = 'info={"name":"John", "birth":"1986-12-14", "city":"New York"}';
   //const obj = JSON.parse(text);
   $.ajax({
           url:'addorder.php',
           type:'post',
           data:information,
           success:function(data){
             alert(data);

           }
       });
 }

 function ConsultAllAnimals(){
   window.location.href = "showallanimals.php";
 }
 function ConsultAllEmployees(){
   window.location.href = "showallemployees.php";
 }

 </script>


 </head>

 <body >

   <div class="imagen">
     <img style="width:100%" src="lemur.jpg"/>
   </div>

   <div id="Emp">

   <div class="welcome" style="margin-top:2%;">

     <p style="font-size:300%;"> Zoo Management App</p>
     <p style="color:#DB2453; font-size:180%;">Employees</p>

     <input type="text" class="inputfield"  placeholder="Employee Id" name ="EId" id = "EId"/> </br></br>
     <input type="text" class="inputfield"  placeholder="Name" name ="Name" id = "Name"/> </br></br>
     <input type="text" class="inputfield"  placeholder="Last Name" name ="LN" id = "LN"/> </br></br>
     <input type="text" class="inputfield"  placeholder="Age" name ="Age" id = "Age"/> </br></br>
     <input type="text" class="inputfield"  placeholder="Gender" name ="Gender" id = "Gender"/> </br></br>

     <div class="button2" onclick="AddEmployee()">Add</div>
     <div class="button2" onclick="SingleConsultEmployees()">Consult </div>
     <div class="button2" onclick="ConsultAllEmployees()">Consult All </div>
     <div class="button2" onclick="DeleteEmployee()">Delete</div>

     </br></br></br></br></br></br>


     <div style="color:#DB2453;" onclick="ChangeToAnimals()">Go to Animals page.</div>

   </div>

   </div>



   <div id="An" style="display:none;">

   <div class="welcome" style="margin-top:2%;">

     <p style="font-size:300%;"> Zoo Management App</p>
     <p style="color:#DB2453; font-size:180%;">Animals</p>

     <input type="text" class="inputfield"  placeholder="Animal Id" name ="AId" id = "AId"/> </br></br>
     <input type="text" class="inputfield"  placeholder="Name" name ="AName" id = "AName"/> </br></br>
     <input type="text" class="inputfield"  placeholder="Specie" name ="Specie" id = "Specie"/> </br></br>
     <input type="text" class="inputfield"  placeholder="Age" name ="AnimalAge" id = "AnimalAge"/> </br></br>
     <input type="text" class="inputfield"  placeholder="Gender" name ="AGender" id = "AGender"/> </br></br>

     <div class="button2" onclick="AddAnimal()">Add</div>
     <div class="button2" onclick="SingleConsultAnimal()">Consult </div>
     <div class="button2" onclick="ConsultAllAnimals()">Consult All </div>
     <div class="button2" onclick="DeleteAnimal()">Delete</div>

     </br></br></br></br></br></br>


     <div style="color:#DB2453;" onclick="ChangeToEmployees()">Go to Employees page.</div>

   </div>

   </div>

 </body>
 </html>
