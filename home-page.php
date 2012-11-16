<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Full Content Template
 *
   Template Name:  Home Page
 *
 * @file           home-page.php
 * @package        Hachi 
 * @author         Anne Camille
 * @copyright      2012 - Anne Camille
 * @license        license.txt
 * @version        Release: 0.1
 * @filesource     wp-content/themes/hachi/home-page.php
 */
?>
<?php get_header(); ?>
	
		
			<div id="content-full">	
				<div class="grid col-620">
					<?php if (function_exists('nivoslider4wp_show')) { nivoslider4wp_show(); } ?>
					<h1 class="post-title"><?php the_title(); ?></h1>
					<p>jisjhiahdauihaisuhuadhuasd<br>
					huhsaushaushaushauhauausasuhsh</p>
				</div>
				
				<?php get_sidebar(); ?>
				
			</div><!-- end of #content-full -->
		
	

<?php get_footer(); ?>
