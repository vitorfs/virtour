    <hr class="featurette-divider">
    <footer>
      <p class="pull-right"><a href="#">Voltar ao início</a></p>
      <p>&copy; 2012 Virtour · <a href="#">Privacidade</a> · <a href="#">Termos</a></p>
    </footer>
  </div>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
  	$(function () {
  		var activeMenu = "<?php echo isset($activeMenu) ? $activeMenu : null; ?>";
  		if (activeMenu != null) {
  			$("li#menu-" + activeMenu).addClass("active");
  		}
  	});
  </script>
</body>
</html>