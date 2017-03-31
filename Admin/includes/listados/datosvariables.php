<?php  
 $connect = mysqli_connect("localhost", "root", "", "sistemaestatal");  
 $query = "SELECT * FROM datos";
 $result = mysqli_query($connect, $query);  
 ?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="../js/datatables.js"></script>
    <title></title>
</head>

<body>
    <hr>
    <div class="col-sm-12">
        <h3>Listado de Datos Almacenados</h3>
        <div class="table-responsive">
            <table id="employee_data" class="table table-hover table-bordered">
                <thead style="font-weight:bold;">
                    <tr>
                        <td>Variable</td>
                        <td>Estado</td>
                        <td>Año</td>
                        <td>Total</td>
                        <td>Fuente</td>
                    </tr>
                </thead>
                <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr> 
                                    <td>'.$row["codVariable"].'</td>
                                    <td>'.$row["codiEstado"].'</td>  
                                    <td>'.$row["ano"].'</td>
                                    <td>'.$row["total"].'</td>
                                    <td>'.$row["fuente"].'</td>
                               </tr>  
                               ';  
                          }  
                          ?>
            </table>
        </div>
    </div>
</body>

</html>
