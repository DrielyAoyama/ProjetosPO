<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Projetos - Pesquisa Operacional</title>

    <!-- Bootstrap -->
    <link href="mochila/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div style="text-align:center;"><br><br><br><br><br><br>
      <h1>Projetos - Pesquisa Operacional</h1><br><br>
          <button style="width:250px;height:200px;font-size:50px;" id="mochila" onclick="mochila()" class="btn btn-primary">Mochila</button>
          <button style="width:250px;height:200px;font-size:50px;" id="mochila" onclick="simplex()" class="btn btn-success">Simplex</button><br><br>
          <span>Driely Aoyama - 521779</span><br>
          <span>Gustavo Menezes - 515655</span><br>
          <span>Alecsander Porto - 513814</span>
      </div>
    </div>

   <script type="text/javascript">
      function mochila(){
        window.location.href="mochila/";
      }
      function simplex(){
        window.location.href="simplex/";
      }
   </script>

  </body>
</html>