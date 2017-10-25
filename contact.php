<?php /* Template Name: Custom_Contact Page */ ?>


<?php get_template_part('head'); ?>

<?php get_header(); ?>

<?php include('functions');?>

<div class="contact-container">
    
    <div class="contactinfo-container">
    
        <div id="googleMap" class="contact-map"></div>
        
        <div class="contact_info"> 
            
            <h1> Contact Us </h1>
            
            <strong>Address:</strong> 
            
            <p> 270 Lafayette St Ste 805 New York, New York 10012</p>
            
            <strong> Phone Number </strong>
            
            <p> 074 850 8810</p>
            
            <input type="text" placeholder="Insert Your Name">
            
            <input type="text" placeholder="Insert Your Email Address">
            
            <textarea placeholder="Your Message"></textarea>
            
            <input type="submit" class="submit-button" value="SEND">
            
        </div>
        
    </div>
    
</div>     

<?php get_footer(); ?>