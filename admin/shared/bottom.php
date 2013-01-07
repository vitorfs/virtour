  </div>
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