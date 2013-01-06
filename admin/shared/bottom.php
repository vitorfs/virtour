  </div>
  <script src="../js/jquery-1.8.3.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
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