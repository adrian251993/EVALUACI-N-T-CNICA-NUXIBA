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
<input type="text" class="form-control" id="idmp2"  >
<a href="index.php"><input type="button" id="listasbtn" value="Regresar a listas"></a>
  <div class="container mt-4 shadow-lg p-3 mb-5 bg-body rounded">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="width:8%;text-transform: none; font-size: 11px;">Id</th>
          <th style="width:8%;text-transform: none; font-size: 11px;">Title</th>
          <th style="width:8%;text-transform: none; font-size: 11px;">completed</th>
        </tr>
      </thead>
      <tbody id="data">
      </tbody>
    </table>
    <button type="button" class="btn btn-sm btn-outline-success" data-dismiss="modal"  onclick="tarea()"><i class="fa fa-check mr-1"></i>Agregar Tarea
                </button>
  </div>


  <!-- empieza modal -->

  <div class="modal fade" id="modal-tarea" tabindex="-1" role="dialog" aria-labelledby="modal-block-fadein" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" >
                                        <div class="modal-content">
                                            <div class="block block-themed block-transparent mb-0" style=" margin: 36px; padding: 16px;
    margin-top: 0;
">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Informacion del Usuario</h4>
                                        <button type="button" class="close" data-dismiss="modal">X</button>
                                    </div>
                                    <input type="text" class="form-control" id="idmp1" hidden >
                <div class="form-group">
                        <label for="example-maxlength4">Title:</label>
                        <input type="static" class="form-control" id="title" >
                    </div>
                    <div class="form-group">
                        <label for="example-maxlength4">Complited:</label>
                        <input type="text" class="form-control" id="complited" >
                    </div>
                  
                    
                   
                    
                <div class="block-content block-content-full text-right border-top">
                <a href="todos.php"><input type="button" id="todobtn" value="cancelar"></a>
                    <button type="button" class="btn btn-sm btn-outline-success" data-dismiss="modal"  onclick="guardar()">Guardar</button>
             
                    
                </div>

  


                
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 



    <script src="./todosController.js">
  
  </script>

  <script >
      users(<?php echo $id;?>)
  </script>
</body>
</html> 