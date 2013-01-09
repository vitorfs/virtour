  </div>
  <?php
    if (isset($activeMenu)) 
        echo "<script>jQuery(function () { jQuery('li#menu-$activeMenu').addClass('active') });</script>";
  ?>
</body>
</html>