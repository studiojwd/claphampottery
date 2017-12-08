<?php
/**
 * Template Name: Home Template
 *
 * @package WordPress
 * @subpackage claphampottery
 */

get_header(); ?>



  <div class="container">
    <div class="row-fluid">
      <div class="span12">	
        <div class="slider"> 
          <div class="carousel slide" id="main-carousel">
            <div class="carousel-inner">
              <?php if( have_rows('slider') ): ?>
                <?php while( have_rows('slider') ): the_row(); ?>
                  <div class="item <?php the_sub_field('first_image'); ?>"> 
                    <figure>
                      <img src="<?php the_sub_field('slider_image'); ?>" />
                    </figure>
                    <article class="span5">
                      <h4><?php the_sub_field('slider_info'); ?></h4>
                      <a href="<?php the_sub_field('slide_link'); ?>">Find out more</a>
                    </article>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
            <div class="carousel-nav pull-right">
              <a href="#main-carousel" class="carousel-control-left" data-slide="prev"><i class="icon-angle-left"></i></a>
              <a href="#main-carousel" class="carousel-control-right" data-slide="next"><i class="icon-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  	
  <section id="content">
    <div class="container">
      <div class="row-fluid">
				
        <div class="span12" style="margin-top: 32px;">
            <div class="span9">
              <h1><?php the_field('the_intro_title'); ?></h1>
              <?php the_field('intro_text_left'); ?>
            </div>     
            <div class="span3">
              <h3><?php the_field('term_dates_title'); ?></h3>
              <?php the_field('term_dates_info'); ?>
            </div>
          <div class="separator" style="clear: both;"></div>
        </div>

        <div class="row-fluid">
          <h2 class="center"><?php the_field('pottery_classes_title'); ?></h2>
        </div>
					
        <div class="row-fluid">
          <?php if( have_rows('pottery_class_section') ): ?>
            <?php while( have_rows('pottery_class_section') ): the_row(); ?>
              <div class="span3">
                <article class="text-item">
                  <img src="<?php the_sub_field('class_image'); ?>" alt="<?php the_sub_field('class_name'); ?>" class="homeimagethumb" />
                  <h3><?php the_sub_field('class_name'); ?></h3>
                  <p><?php the_sub_field('class_description'); ?></p>
                  <a href="<?php the_sub_field('class_link'); ?>">Read more</a>
                </article>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <div class="separator"></div>


        <div class="row-fluid">
          <h2 class="center"><?php the_field('pottery_party_title'); ?></h2>
        </div>
        <div class="row-fluid">
          <?php if( have_rows('pottery_party_section') ): ?>
            <?php while( have_rows('pottery_party_section') ): the_row(); ?>
              <div class="span3">
                <article class="text-item">
                  <img src="<?php the_sub_field('party_image'); ?>" alt="<?php the_sub_field('party_name'); ?>" class="homeimagethumb" />
                  <h3><?php the_sub_field('party_name'); ?></h3>
                  <p><?php the_sub_field('party_description'); ?></p>
                  <a href="<?php the_sub_field('party_link'); ?>">Read more</a>
                </article>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="separator"></div>
      </div>
    </div>
  </section>
       
      
		
<?php get_footer(); ?>