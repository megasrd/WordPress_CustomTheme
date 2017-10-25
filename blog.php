<?php /* Template Name: Custom_Blog Page */ ?>


<?php get_template_part('head'); ?>

<?php get_header(); ?>

<?php include('functions');?>
<?php include('post-data'); ?>


<div class="blog-container">   
    
<br>    
<br>    
<br>

    
    
<h1> <?php the_title(); ?> </h1>    

    
<h2> Instagram Feed </h2>
    
    
    <div class="instafeed-container">

        <center>

        <div class="insta-content">
            <div class="insta-image"> </div>
            <p> Title Text </p>
        </div>

        <div class="insta-content">
            <div class="insta-image"> </div>
            <p> Title Text </p>
        </div>

        <div class="insta-content">
            <div class="insta-image"> </div>
            <p> Title Text </p>
        </div>

        <div class="insta-content">
            <div class="insta-image"> </div>
            <p> Title Text </p>
        </div>

        </center>    

    </div>
    
    <br>
    
    <div class="news-container"> 
        
        <h2> Latest News </h2>
        
        <?php 
        
       $blogPosts = new WP_Query('cat=1');
        
			if (have_posts() ) : while ($blogPosts->have_posts() ) : $blogPosts->the_post();
  	
				get_template_part( 'components/content/content-article');
  
			endwhile; endif; 
        ?>
        
    </div>
    
    <div class="events-container">
    
        <h2> Events </h2>
        
        <div class="events-content">
            
            <div class="events-image">
            </div>
            
            <p> VENUE: XXXXXX</p>
            
            <p> TIME: XXXXXXX</p>
            
            <input type="button" value="ORDER">
            
        </div>
        
        <div class="events-content">
            
            <div class="events-image">
            </div>
            
            <p> VENUE: XXXXXX</p>
            
            <p> TIME: XXXXXXX</p>
            
            <input type="button" value="ORDER">
            
        </div>
        
        <div class="events-content">
            
            <div class="events-image">
            </div>
            
            <p> VENUE: XXXXXX</p>
            
            <p> TIME: XXXXXXX</p>
            
            <input type="button" value="ORDER">
            
        </div>
        
    </div>
    
    
    
</div>
     
</body>

<?php get_template_part('subfooter'); ?>

<?php get_footer(); ?>