<?php
/**
 * Template Name: About Template
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
          <div class="intro"> 
            <div class="span6">
              <?php the_field('about_left'); ?>             
            </div>   
            <div class="span6">
              <?php the_field('about_right'); ?>             
            </div>      
          </div>
        </div>
        <div class="separator" style="clear: both;"></div>
      </div>
      
    </div>
  </section>
  
</div>
       
      
		
<?php get_footer(); ?>