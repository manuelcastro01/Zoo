<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="design.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&?family=Poppins&family=Open+Sans&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <title>Convert JSON Data to HTML Table</title>


    <script>
    function CreateTableFromJSON() {



      $.ajax({
              url:'https://ap-zoo-api-gateway.herokuapp.com/employeeService/readEmployees',
              type:'get',
              success:function(data){


                const myBooks = JSON.parse(JSON.stringify(data.rows));

                var col = [];
                for (var i = 0; i < myBooks.length; i++) {
                    for (var key in myBooks[i]) {
                        if (col.indexOf(key) === -1) {
                            col.push(key);
                        }
                    }
                }

                // CREATE DYNAMIC TABLE.
                var table = document.createElement("table");

                // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

                var tr = table.insertRow(-1);                   // TABLE ROW.

                for (var i = 0; i < col.length; i++) {
                    var th = document.createElement("th");      // TABLE HEADER.
                    th.innerHTML = col[i];
                    tr.appendChild(th);
                }

                // ADD JSON DATA TO THE TABLE AS ROWS.
                for (var i = 0; i < myBooks.length; i++) {

                    tr = table.insertRow(-1);

                    for (var j = 0; j < col.length; j++) {
                        var tabCell = tr.insertCell(-1);
                        tabCell.innerHTML = myBooks[i][col[j]];
                    }
                }

                // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
                var divContainer = document.getElementById("showData");
                divContainer.innerHTML = "";
                divContainer.appendChild(table);




              }
          });


      }
    </script>
</head>
<body>

  <p class="tituloensayo ">Employees</p>

    <p id="showData"></p> <br><br>

    <center>

    <a href="admin.php">Volver </a>

  </center>
</body>

<script>


        CreateTableFromJSON();

</script>
</html>
