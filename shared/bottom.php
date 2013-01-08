    <hr class="featurette-divider">
    <footer>
      <p class="pull-right"><a href="#">Voltar ao início</a></p>
      <p>&copy; 2012 Virtour · <a href="#">Privacidade</a> · <a href="#">Termos</a></p>
    </footer>
  </div>
  <?php
    if (isset($activeMenu)) {
        echo "<script>jQuery(function () { jQuery('li#menu-$activeMenu').addClass('active') });</script>";
    }
  ?>  
</body>
</html>