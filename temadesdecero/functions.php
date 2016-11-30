<html>
<div id = "sidebar" class = "wid">
<?php
//We hook our action on widgets_init
add_action('widgets_init','jplana_widgets_init');

function jplana_widgets_init(){
    $args = array(
        'name'          => 'Header Widget Zone',
        'id'            => 'header-widget-zone',
        'description'   => '',
        'before_widget' => '<div class="wid">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="wid">',
        'after_title'   => '</h2>' );
    register_sidebar($args);
}
?>



</div>
</html>