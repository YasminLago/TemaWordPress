<!DOCTYPE html>

<?php
get_header();
?>

<html>
   <head>
      <title>Primer tema de Wordpress</title>
   </head>
   <body>
      
   <p>Hola Mundo</p>
   
   <h2 id="post-<?php the_ID(); ?>">
   <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
   <?php the_title(); ?></a></h2>
   <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
   
   <?php 
   //phpinfo(); //Muestra la informacion sobre la version de php que se esta usando
   //Bucle que recorre los post
      if ( have_posts() ) {
      while ( have_posts() ) { 
         the_post(); 
         the_content(); //Muestra el contenido de la pagina
      }
       }
       //echo "listo";
?>
     </body>
</html>




<?php
get_footer();
?>