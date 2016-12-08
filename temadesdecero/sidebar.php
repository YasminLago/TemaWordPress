<html>
   <body>
      <h1>Sidebar</h1>
      <img src="<?php echo get_template_directory_uri();?>/images/buscar.png">
      <?php
         if ( ! dynamic_sidebar( 'header-widget-zone' ) ) {} 
      ?>
   </body>
</html>