<?php 
/**
* The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jaydenishere

 */

 get_header();
?>
<div class="content-area">
<main>
    <div class="container">
        <div class="row">
        <?php while(have_posts()){
             the_post();
?>
        
         <p><?php the_content(); ?></p>
       
         <?php
        }
        
        ?>
        </div>
    </div>
</main>
</div>
<?php 
get_footer();
?>