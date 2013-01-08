<?php 
  $activeMenu = "home";
?>

<?php include("shared/top.php") ?>
<div class="row icons" style="margin-top:50px;text-align:center">
  <div class="span3 offset1 well">
    <a href="usuarios.php">
    	<img src="img/users.png" />
    	<h3>Usuários</h3>
    </a>
  </div>
  <div class="span3 well">
    <a href="empresas.php">
      <img src="img/briefcase.png" />
      <h3>Empresas</h3>
    </a>
  </div>  
  <div class="span3 well">
  	<a href="tours.php">
	    <img src="img/refresh.png" />
	    <h3>Tours</h3>
    </a>
  </div>
</div>
<?php include("shared/bottom.php") ?>