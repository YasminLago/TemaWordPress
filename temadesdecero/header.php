<!DOCTYPE html>
<html>
   <head>
      <body>
         <link rel ="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri ();?>"/>
         <div id="cabecera">
            <h1>Esto es una cabecera</h1>
            <div id = "menu2">
               <?php
                  wp_nav_menu( array( 'menu' => 'Segundo Menú SXE' ) ); 
               ?>
            </div>   
         </div>
      </body>
   </head>
</html>

