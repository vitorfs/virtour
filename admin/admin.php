<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Virtour - Área Administrativa</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
</head>
<body>
  <div class="navbar">
    <div class="navbar-inner">
      <a class="brand" href="#">Área Administrativa</a>
      <ul class="nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Tours</a></li>
      </ul>
      <ul class="nav pull-right">
        <li><a href="#">Sair</a></li>
      </ul>      
    </div>
  </div>
  <div class="container">
    <div class="row" style="margin-top:50px">
      <div class="span3 offset2 well">
        <img src="img/users.png" class="pull-left" style="padding-right:20px" />
        <h3><a href="clientes.php">Manter Clientes</a></h3>
      </div>
      <div class="span3 offset1 well">
        <img src="img/refresh.png" class="pull-left" style="padding-right:20px" />
        <h3><a href="tours.php">Manter Tours</a></h3>
      </div>      
    </div>
  </div>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>