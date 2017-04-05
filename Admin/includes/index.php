
  <?php session_start(); ?>
<!DOCTYPE html>
<html lang="">

<head>
<title>Administración</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styles.css">
    

    <script type="text/javascript">


     $(document).ready(function(){
     

      $("#login").submit(function(e){
        var username = $("#Usuario").val();
        var password = $("#Password").val();

        var data = {Usuario:username, Password:password}

        var response5 = $.ajax({ 
          type:"POST",
          url:"validar_login.php", 
          data: data
      });
        response5.done(function(data, jqXHR,textStatus,errorThrown){
          if (textStatus.status === 202) {
            alert('Bienvenido');
            window.location.replace("/ceepscoahuila/Admin/includes");

          }
          else {
            alert('Usuario y/o Contraseña Invalidos');
          }
        });
        e.preventDefault();

      });
    });

  

    </script>

</head>

<body>

<?php
  if(!isset($_SESSION['user'])){
    include('login.php');
  } else {
    include('pagina_principal.php');
  }
?>
</div>
    
</body>
</html>