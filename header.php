	<!DOCTYPE html>
<html>
    <head>
    	<title><?php bloginfo('name');?>-<?php bloginfo('description');?></title>
        <meta charset="UTF-8">
        <meta name="author" content="Blandine Maffre">
        <meta name="keywords" content="Blandine Maffre, Modèle, HTML">
        <meta name="description" content="Modèle HTML de Blandine Maffre">
        <link rel="icon" type="image/png" href="images/icone.png" />
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/theme.css" />
        <?php wp_head();?>

    </head>
    <body>
        <header>
        	<nav id="menuprincipal">
        		<?php wp_page_menu('show_home=1');?>
        	</nav>
        	<h1>J'aime les cailloux</h1>
            <aside>
    			<?php get_sidebar();?>
    		</aside>
				<?php bloginfo('name');?>-<?php bloginfo('description');?>
        </header>
