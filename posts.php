<?php
$id = $_GET['id'];
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
    <title></title>

    <style>
      body{
        background-color: whithe;
      }
      table thead {
            background:#302b63;
            color:white;
        }
    </style>
</head>
<body>
<Label>POSTS</Label>
<a href="index.php"><input type="button" id="listasbtn" value="Regresar a listas"></a>
  <div class="container mt-4 shadow-lg p-3 mb-5 bg-body rounded">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="width:8%;text-transform: none; font-size: 11px;">Id</th>
          <th style="width:8%;text-transform: none; font-size: 11px;">Title</th>
          <th style="width:8%;text-transform: none; font-size: 11px;">body</th>
        </tr>
      </thead>
      <tbody id="data">
      </tbody>
      
    </table>
    <Label>COMMENTS</Label>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="width:8%;text-transform: none; font-size: 11px;">Id</th>
          <th style="width:8%;text-transform: none; font-size: 11px;">Name</th>
          <th style="width:8%;text-transform: none; font-size: 11px;">email</th>
          <th style="width:8%;text-transform: none; font-size: 11px;">body</th>
        </tr>
      </thead>
      <tbody id="data2">
      </tbody>
      
    </table>
    
  </div>


 

  


                
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 



    <script src="./postController.js">
  
  </script>
   <script>
   posts(<?php echo $id;?>)
  </script>
 <script>
   coment(<?php echo $id;?>)
  </script>

</body>
</html> 