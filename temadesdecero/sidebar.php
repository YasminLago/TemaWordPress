<html>
   <body>
      <p class="wid">Esto es un sidebar</p>
      <img src="<?php echo get_template_directory_uri();?>/images/buscar.jpg" class="wid">
      <?php if ( ! dynamic_sidebar( 'header-widget-zone' ) ) {} ?>
      
   </body>
</html>