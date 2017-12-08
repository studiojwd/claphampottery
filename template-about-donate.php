<?php
/**
 * Template Name: Donate Template
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
              <?php the_field('about_left'); ?>             
            </div>   
            <div class="span6">
              <?php the_field('about_right'); ?>             
            </div>      
          </div>
      </div>
      
      <div class="row-fluid">
        <div class="span12">
            <!-- /////////////////// PayPal Donation Button //////////////////////////////-->
            <div style="margin-top: 24px; margin-bottom: 24px;">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post"><input name="cmd" type="hidden" value="_s-xclick" /> <input name="hosted_button_id" type="hidden" value="V6CPT2THTSNTC" /> <input alt="PayPal — The safer, easier way to pay online." name="submit" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" type="image" /> <img src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" alt="" width="1" height="1" border="0" /></form>
            </div>
            <!-- /////////////////// ENDOF PayPal Donation Button //////////////////////////////-->
            <p><a href="/downloads/CPotter_SaveCPB_onlineForm_220513.pdf" target="_blank">GiftAid declaration form</a></p>
            <p>Registered Charity No: 1129048.</p>     
          </div>
        <div class="separator" style="clear: both;"></div>
      </div>
      
    </div>
  </section>
  
</div>
       
      
		
<?php get_footer(); ?>



