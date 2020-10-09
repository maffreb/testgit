<?php
//ajout du titre
function ajout_titre(){
  add_theme_support('title-tag');
}
add_action('after_setup_theme','ajout_titre');

//je fait genre je tape un truc, mais en vrai j'en ai rien à faire
?>
