<?php
/**
 * Template Name: Work Template
 *
 * @package WordPress
 * @subpackage claphampottery
 */

get_header(); ?>


<div id="work">
  <div class="container">
    <div class="row-fluid">
      <div class="span12">	
        <span class="title"><h1><?php the_field('page_title'); ?></h1></span>
      </div>
    </div>
  </div> 
  	
  <section id="content">
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
              <?php the_field('intro'); ?>             
        </div>
      </div>
      <div class="row-fluid">
        <div class="span12">
              <?php if( have_rows('work_samples') ): ?>
                <?php while( have_rows('work_samples') ): the_row(); ?>
                  <div class="span3 worksamples">
                    <img src="<?php the_sub_field('image'); ?>" />
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>            
        </div>
        <div class="separator" style="clear: both;"></div>
      </div>
      <div class="row-fluid">
        <div class="span12">
              <?php if( have_rows('student_videos') ): ?>
                <?php while( have_rows('student_videos') ): the_row(); ?>
                  <div class="workvideos">
                    <div class="video"><?php the_sub_field('video_code'); ?></div>
                    <h3><?php the_sub_field('video_name'); ?></h3>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>            
        </div>
        <div class="separator" style="clear: both;"></div>
      </div>
      
    </div>
  </section>
  
</div>
       
      
		
<?php get_footer(); ?>
