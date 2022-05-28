?<?php  ?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="design.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <meta charset="UTF-8">
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

  <p class="tituloensayo"> All Employees</p>

  <table>

    

  </table>


</body>
</html>
