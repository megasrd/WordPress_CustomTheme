<?php /* Template Name: Custom_MainPage */ ?>


<?php get_template_part('head'); ?>

<?php get_header(); ?>

<?php include('functions');?>
<?php include('post-data'); ?>


<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'components/mainBody_content');
  
			endwhile; endif; 

?>


<?php get_template_part('subfooter'); ?>

<?php get_footer(); ?>

