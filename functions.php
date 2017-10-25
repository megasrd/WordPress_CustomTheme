<?php

$pageNum = 1;

$text = "Hi There!";

$nav_url_current;

$nav_url_main = "components/mainBody_content";

$nav_url_portfolio = "components/portfolio";

$nav_url_blog = "components/blog";

$nav_url_contact = "components/contact";

$navList = array(
    "main" => "components/mainBody_content",
    "port" => "components/portfolio",
    "blog" => "components/blog",
    "contact" => "components/contact"
    );

/*function changePage () {

    echo $text; 
    
    switch  ($pageNum) {
            
        case 1:
            
            $nav_url_current = $nav_url_main;
            
            break;
            
        case 2:
            
            $nav_url_current = $nav_url_portfolio;
            
            break;
            
        case 3:
            
            $nav_url_current = $nav_url_contact;
            
            break;
    }
    
}*/

function testFunction () {


    switch  ($GLOBALS['pageNum']) {
            
        case 1:
            
           $GLOBALS['nav_url_current'] = $GLOBALS['$nav_url_main'];

            echo $navUrlCurrent;
            
            break;
            
        case 2:
            
            $GLOBALS['nav_url_current'] = $GLOBALS['nav_url_portfolio'];
            
            echo "Case 2 Running";

            break;
            
        case 3:
            
            $nav_url_current = $nav_url_contact;
            
            echo "Case 3 Running";

            break;
    }

}

testFunction();

?>