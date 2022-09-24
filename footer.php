<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Pixel play
 */

?>
<footer>
    <section class="footer-widgets">
        <div class="container">
       <div class="row footer-layer1 text-center">
                         <!-- you can put any widget you want -->
                    <?php if(is_active_sidebar('jaydenishere-sidebar-footer0')): ?>  
                        <div class="col-md-3 col-12">
                        <?php dynamic_sidebar('jaydenishere-sidebar-footer0') ?> 
                        </div>
                    <?php endif; ?>       
                    <?php if(is_active_sidebar('jaydenishere-sidebar-footer1')): ?>  
                        <div class="col-md-3 col-12">
                        <?php dynamic_sidebar('jaydenishere-sidebar-footer1') ?> 
                        </div>
                    <?php endif; ?>       
                    <?php if(is_active_sidebar('jaydenishere-sidebar-footer2')): ?>  
                        <div class="col-md-3 col-12">
                        <?php dynamic_sidebar('jaydenishere-sidebar-footer2') ?> 
                        </div>
                    <?php endif; ?>       
                    <?php if(is_active_sidebar('jaydenishere-sidebar-footer3')): ?>  
                        <div class="col-md-3 col-12 flex-column">
                        <?php dynamic_sidebar('jaydenishere-sidebar-footer3') ?> 
                        </div>
                    <?php endif; ?>       
       </div>
        </div>
    </section>
    <section class="copyright">
        <div class="container">
            <div class="row footer-layer2">
                <div class="copyright-text col-12 center-block text-center"> 
                    
                    <p><?php echo esc_html( _e('&#169; Copyright 2022 Jayden Portfolio - All Rights Reserved','jaydenishere')) ;?></p>
                </div>
       
            </div>
        </div>
    </section>
</footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>


