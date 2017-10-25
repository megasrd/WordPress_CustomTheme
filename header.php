<!--
<header>
    
    <nav class="main_navbar">

        <img class="main_logo" src="">

            <ul>
                <li><a href="#"> Home </a></li>
                <li><a href='index.php?test=true'> Portfolio </a></li>
                <li><a href="blog.html"> Blogs & News</a></li>
                <li><a href="#"> About Us </a></li>
                <li><a href="contact.html"> Contact Us </a></li>
            </ul>
    </nav>
    
</header>  
    
-->

<?php wp_nav_menu( array(
  'theme_location' => 'header_menu',
  'menu_id'        => 'header_menu',
  'menu_class'     => 'main_navbar'
) ); ?>


<body>