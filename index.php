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
      .load{
        content:"carrengando..."
      }
    </style>
  </head>
  <body>


    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">text ajax</h3>
      </div>
      <div class="panel-body" id="retornoaqui">

      </div>
    </div>

    <!-- jQuery (Must for Bootstrap) -->
    <script src="assets/jquery.min.js"></script>
    <script src="assets/jquery-ui.js"></script>
    <!-- Bootstrap script -->
    <script src="assets/bootstrap.min.js"></script>
    <script src="assets/Ajax.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#retornoaqui').AjaxProccess({getUrl:'acoes.php'});
      });
    </script>
  </body>
</html>
