<?php
//ajout du titre
function ajout_titre(){
  add_theme_support('title-tag');
}
add_action('after_setup_theme','ajout_titre');
?>
