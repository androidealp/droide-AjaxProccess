<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome.min.css">
    <style media="screen">
      .hide{
        display:none;
      }
    </style>
  </head>
  <body>


    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Simultâneo código acoes.php <a href="#" id="teste" class="btn btn-primary">clique aqui</a></h3>
      </div>
      <div class="panel-body" id="retornoaqui">
        load...
      </div>
    </div>

    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Visualização de código Simultâneo acoes.php</h3>
      </div>
      <div class="panel-body" id="execucao_sec">
        load...
      </div>
    </div>

    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Código acoes_segundo.php</h3>
      </div>
      <div class="panel-body" id="execucao_tec">
        load...
      </div>
    </div>


    <!-- jQuery (Must for Bootstrap) -->
    <script src="assets/jquery.min.js"></script>
    <!-- Bootstrap script -->
    <script src="assets/bootstrap.min.js"></script>
    <script src="assets/droide-ajaxprocess.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#retornoaqui').droideProcess({getUrl:'acoes.php',elementClick:'#teste',timeout:4500});
        $('#execucao_sec').droideProcess({getUrl:'acoes.php',event:'load',timeout:2500});
        $('#execucao_tec').droideProcess({getUrl:'acoes_segundo.php',event:'load'});
      });
    </script>
  </body>
</html>
