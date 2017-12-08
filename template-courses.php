<?php
/**
 * Template Name: Course Template
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
            <div class="span6">
              <?php the_field('course_info'); ?>
            </div>   
            <div class="span6">
              <?php the_field('course_info_right'); ?>
            </div>     
        </div>
        <div class="separator" style="clear: both;"></div>
      </div>
      <div class="row-fluid">
        <div class="span12 ">
            <?php if( have_rows('course_dates') ): ?>
              <?php while( have_rows('course_dates') ): the_row(); ?>
                <div class="span4 coursedetails">
                  <h3><?php the_sub_field('class_type'); ?></h3>
                  <?php the_sub_field('class_time'); ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
        </div>
      </div>
      <div class="row-fluid">
        <div class="span12">
            <div class="span12">
              <p>Please <a href="/contact">contact us</a> for more information about <?php the_field('course_title'); ?></p>
            </div>     
        </div>
      </div>
    </div>
  </section>
  
</div>
       
      
		
<?php get_footer(); ?>