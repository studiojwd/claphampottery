<?php
/**
 * Template Name: Parties Template
 *
 * @package WordPress
 * @subpackage claphampottery
 */

get_header(); ?>


<div id="course">
  <div class="container">
    <div class="row-fluid">
      <div class="span12">	
        <img src="<?php the_field('hero_image'); ?>" />
        <span class="title"><h1><?php the_field('course_title'); ?></h1></span>
      </div>
    </div>
  </div> 
  	
  <section id="content">
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
            <div class="span8">
              <?php the_field('course_info'); ?>
              <p>Please <a href="/contact">contact us</a> for more information about <?php the_field('course_title'); ?></p>
              
            </div>   
            <div class="span4">
                    <h3><?php the_field('price'); ?></h3>
                    <?php the_field('price_info'); ?>
            </div>     
        </div>
        <div class="separator" style="clear: both;"></div>
      </div>
      
    </div>
  </section>
  
</div>
       
      
		
<?php get_footer(); ?>