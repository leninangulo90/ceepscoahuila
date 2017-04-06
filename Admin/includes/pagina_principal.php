
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" media="screen" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/script/jquery-3.0.0.min.js"></script>
  <script src="bootstrap/script/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
  .img {
    height: 200px;
  }
</style>
<script type="text/javascript">
  $(document).ready(function(){
    $("#sistema_estatal").click(function (){
      $("#estatal").css("display","block");
      $("#municipal").css("display","none")
    })
    $("#sistema_municipal").click(function(){
      $("#municipal").css("display","block")
      $("#estatal").css("display","none");
    })
  })
</script>
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Desplegar Informacion</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-form navbar-left" rel="home" href="#" ><img style="max-width:100px;height:50px;margin-top:-5px;" src="images/favicon2.png"></a> <a class="navbar-brand" style="margin-top:-1px;" href="#">Bienvenido</a>
    </div>    

        <nav class="navbar navbar-inverse navbar-fixed-bottom" style="border-top:2px solid black;"><p style="margin-top:35px;margin-bottom:20px;color:whitesmoke; font-size:15px;font-family:calibri light;">CEEPS COAHUILA &copy; 2017. Todos los derechos reservados.</p></nav>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
        <li><a href="#" id="sistema_estatal">Sistema Estatal</a></li>
        <li><a href="#" id="sistema_municipal">Sistema Municipal</a></li>
        </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="btn">
                    <a href="disconnect.php" class="btn btn-warning" style="margin-top:20px;">Log Out</a>
                </div>
            </form>
          </div>
          </nav>
<br><br><br><br>

<div id="estatal">
<div class="texto_conocenos">
      <hr class="style18">
      <h2>¡NUESTROS FACTORES-ESTATAL</h2>
      <hr class="style18">
    </div><CENTER>
   
   <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top img" src="images/economia.jpg">
                    <div class="card-block">
                        <a href="" class="btn btn-default"><h5 class="text-bold">ECONOMIA</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top img" src="images/conocimiento.jpg">
                    <div class="card-block">
                        <a href="" class="btn btn-default"><h5 class="text-bold">CAPITAL HUMANO</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top img" src="images/sociedad.jpg">
                    <div class="card-block">
                       <a href="" class="btn btn-default"> <h5 class="text-bold">SOCIEDAD</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top img" src="images/salud.jpg">
                    <div class="card-block">
                       <a href="" class="btn btn-default"> <h5 class="text-bold">SALUD</h5></a>
                    </div>
                </div>
            </div>
          </div>
          </div>
          <hr><hr>
          <div class="container">
        <div class="row">
            
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top img" src="images/industria.jpg">
                    <div class="card-block">
                       <a href="" class="btn btn-default"> <h5 class="text-bold">INDUSTRIA</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top img" src="images/desarrollo.jpg">
                    <div class="card-block">
                       <a href="" class="btn btn-default"> <h5 class="text-bold">DESARROLLO</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top img" src="images/crisis.jpg">
                    <div class="card-block">
                       <a href="" class="btn btn-default"> <h5 class="text-bold">CIFRAS ECONOMICAS</h5></a>
                    </div>
                </div>
            </div>
          </div>
          </div><br><br><br><br><br><br><br>
           <div id="footer">
            <div class="container">
                
            </div>
        </div>

    </div>

    <div id="municipal" style="display: none;">
<div class="texto_conocenos">
      <hr class="style18">
      <h2>¡NUESTROS FACTORES-MUNICIPAL!</h2>
      <hr class="style18">
    </div><CENTER>
   
   <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top img" src="images/economia.jpg">
                    <div class="card-block">
                        <a href="" class="btn btn-default"><h5 class="text-bold">ECONOMIA</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top img" src="images/conocimiento.jpg">
                    <div class="card-block">
                        <a href="" class="btn btn-default"><h5 class="text-bold">CAPITAL HUMANO</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top img" src="images/sociedad.jpg">
                    <div class="card-block">
                       <a href="" class="btn btn-default"> <h5 class="text-bold">SOCIEDAD</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top img" src="images/salud.jpg">
                    <div class="card-block">
                       <a href="" class="btn btn-default"> <h5 class="text-bold">SALUD</h5></a>
                    </div>
                </div>
            </div>
          </div>
          </div>
          <hr><hr>
          <div class="container">
        <div class="row">
            
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top img" src="images/industria.jpg">
                    <div class="card-block">
                       <a href="" class="btn btn-default"> <h5 class="text-bold">INDUSTRIA</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top img" src="images/desarrollo.jpg">
                    <div class="card-block">
                       <a href="" class="btn btn-default"> <h5 class="text-bold">DESARROLLO</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top img" src="images/crisis.jpg">
                    <div class="card-block">
                       <a href="" class="btn btn-default"> <h5 class="text-bold">CIFRAS ECONOMICAS</h5></a>
                    </div>
                </div>
            </div>
          </div>
          </div><br><br><br><br><br><br><br>
           <div id="footer">
            <div class="container">
                
            </div>
        </div>

    </div>