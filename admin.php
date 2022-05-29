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

   var AId = document.getElementById('AId').value;
   var Anombre = document.getElementById('AName').value;
   var specie = document.getElementById('Specie').value;

   var AGender = document.getElementById('AGender').value;

   const info = '{"id":"'+AId+'", "nombre":"'+Anombre+'", "sexo":"'+AGender+'","especie":"'+specie+'"}';

   const obj = JSON.parse(info);


   //const obj = JSON.parse(text);
   $.ajax({
           url:'https://ap-zoo-api-gateway.herokuapp.com/animalService/createAnimal',
           type:'post',
           data:obj,
           success:function(data){

             if (data.error ==null){
             swal("Ok", "Registro agregado correctamente!", "success");
               }
               else{
                 swal("Something went wrong", "No se pudo actualizar el registro :(", "error");
               }

           }
       });
 }

 function AddEmployee(){

   var EId = document.getElementById('EId').value;
   var Enombre = document.getElementById('Name').value;
   var apellido = document.getElementById('LN').value;
   var edad = document.getElementById('Age').value;
   var EGender = document.getElementById('Gender').value;

   const info = '{"id":"'+EId+'", "nombre":"'+Enombre+'", "apellido":"'+apellido+'", "edad":"'+edad+'", "sexo":"'+EGender+'"}';

   const obj = JSON.parse(info);


   $.ajax({
           url:'https://ap-zoo-api-gateway.herokuapp.com/employeeService/createEmployee',
           type:'post',
           data:obj,
           success:function(data){

            if (data.error ==null){
            swal("Ok", "Registro actualizado correctamente!", "success");
              }
              else{
                swal("Something went wrong", "No se pudo actualizar el registro :(", "error");
              }

           }
       });
 }


 function UpdateEmployees(){

   var EId = document.getElementById('EId').value;
   var Enombre = document.getElementById('Name').value;
   var apellido = document.getElementById('LN').value;
   var edad = document.getElementById('Age').value;
   var EGender = document.getElementById('Gender').value;

   const info = '{"id":"'+EId+'", "nombre":"'+Enombre+'", "apellido":"'+apellido+'", "edad":"'+edad+'", "sexo":"'+EGender+'"}';

   const obj = JSON.parse(info);


   $.ajax({
           url:'https://ap-zoo-api-gateway.herokuapp.com/employeeService/updateEmployee',
           type:'put',
           data:obj,
           success:function(data){

             if (data.error ==null){
             swal("Ok", "Registro actualizado correctamente!", "success");
               }
               else{
                 swal("Something went wrong", "No se pudo actualizar el registro :(", "error");
               }
           }
       });
 }

 function UpdateAnimal(){

   var AId = document.getElementById('AId').value;
   var Anombre = document.getElementById('AName').value;
   var specie = document.getElementById('Specie').value;

   var AGender = document.getElementById('AGender').value;

   const info = '{"id":"'+AId+'", "nombre":"'+Anombre+'", "sexo":"'+AGender+'","especie":"'+specie+'"}';

   const obj = JSON.parse(info);


   $.ajax({
           url:'https://ap-zoo-api-gateway.herokuapp.com/animalService/updateAnimal',
           type:'put',
           data:obj,
           success:function(data){

             if (data.error ==null){
             swal("Ok", "Registro actualizado correctamente!", "success");
               }
               else{alert(data.error);}
           }
       });
 }

 function DeleteEmployee(){

   var EId = document.getElementById('EId').value;


   const info = '{"id":"'+EId+'"}';

   const obj = JSON.parse(info);


   $.ajax({
           url:'https://ap-zoo-employee-api.herokuapp.com/deleteEmployee',
           type:'delete',
           data:obj,
           success:function(data){

             if (data.error ==null){
             swal("Ok", "Registro eliminado correctamente!", "success");
               }
               else{alert(data.error);}
           }
       });
 }

 function DeleteAnimal(){

   var AId = document.getElementById('AId').value;

   const info = '{"id":"'+AId+'"}';

   const obj = JSON.parse(info);

   $.ajax({
           url:'https://ap-zoo-animal-api.herokuapp.com/deleteAnimal',
           type:'delete',
           data:obj,
           success:function(data){

             if (data.error ==null){
             swal("Ok", "Animal eliminado correctamente!", "success");
               }
               else{alert(data.error);}
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
     <div class="button2" onclick="UpdateEmployees()">Update </div>
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

     <input type="text" class="inputfield"  placeholder="Gender" name ="AGender" id = "AGender"/> </br></br>

     <div class="button2" onclick="AddAnimal()">Add</div>
     <div class="button2" onclick="UpdateAnimal()">Update </div>
     <div class="button2" onclick="ConsultAllAnimals()">Consult All </div>
     <div class="button2" onclick="DeleteAnimal()">Delete</div>

     </br></br></br></br></br></br>


     <div style="color:#DB2453;" onclick="ChangeToEmployees()">Go to Employees page.</div>

   </div>

   </div>

 </body>
 </html>
