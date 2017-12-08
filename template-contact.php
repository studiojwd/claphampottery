<?php
/**
 * Template Name: Contact Template
 *
 * @package WordPress
 * @subpackage claphampottery
 */

get_header(); ?>


<div id="about">
  <div class="container">
    <div class="row-fluid">
      <div class="span12">	
        <span class="title"><h1><?php the_field('contact_title'); ?></h1></span>
      </div>
    </div>
  </div> 
  	
  <section id="content">
    <div class="container">
      <div class="row-fluid">
        <div class="span12" style="margin-bottom: 40px;">
              <?php the_field('map'); ?>
            </div>
<div class="span12">
    <div class="span4">
      <?php the_field('contact_details'); ?>             
    </div>   
<div class="span4">
  <?php the_field('address_details'); ?>             
</div>  
<div class="span4">
  <?php the_field('northstreet_details'); ?>             
</div>      
</div>
        <div class="separator" style="clear: both;"></div>

<div class="span12">
      <?php the_field('other_details'); ?>             
</div>
        <div class="separator" style="clear: both;"></div>
      </div>
      
    </div>
  </section>
  
</div>
       
      
		
<?php get_footer(); ?>