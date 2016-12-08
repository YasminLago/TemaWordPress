<!DOCTYPE html>
<html>
   <body>
      <link rel ="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri ();?>"/>
      <div id="pie">
         <div id = "menu1">
           <?php
               wp_nav_menu( array( 'menu' => 'Menú SXE' ) ); 
            ?>
          <h2>Esto es un pie de pagina</h2>
         </div>
      </div>
   </body>
</html>

