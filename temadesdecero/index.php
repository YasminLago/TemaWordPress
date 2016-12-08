<!DOCTYPE html>

<?php
get_header();
?>

<html>
   <head>
      <title>Primer tema de Wordpress</title>
   </head>
   
   <body>
      <link rel ="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri ();?>"/>
      
      
      <div id ="sidebar">
          <?php
          get_sidebar('ejemplo'); 
          ?> 
      </div>
      <div id="loop">
         <p>Tema WordPress SXE</p>
         <h2 id="post-<?php the_ID(); ?>"/>
         <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
         <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
        
         
         <?php
         the_title(); 
         ?>
         
         <small>
            <?php
            the_time('F jS, Y') 
            ?> <!-- by 
            <?php
            the_author() 
            ?> -->
         </small>
      
         <?php 
         //phpinfo(); //Muestra la informacion sobre la version de php que se esta usando
         //Bucle que recorre los post
         if ( have_posts() ) {
            while ( have_posts() ) { 
               the_post(); 
               the_content(); //Muestra el contenido de la pagina
            }
         }
         ?>
      </div>
   </body>
</html>

<?php
get_footer();
?>

