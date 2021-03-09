<?php
/*
Template Name: luke home
*/
get_header();
?>
<main>
    <div id="top">
        <div id="about">
            <h1><?php echo 'Moshe Abecasis'; ?></h1>
            <p><?php echo'Full Stack Student' ?></p>
            <div id="skills">
                <div>html5</div>
                <div>css</div>
                <div>js</div>
                <div>php</div>
                <div>wordpress</div>
            </div>
            <div id="contact">
                <a href=""><i class="fas fa-phone"></i> 0523753194</a>
                <a href=""><i class="fas fa-at"></i> mosh14abou@yahoo.com</a>
                <a href=""><i class="fab fa-linkedin"></i> Linkedin</a>
                <a href=""><i class="fab fa-github"></i> GitHub</a>
                <a href=""><i class="fab fa-codepen"></i> CodePen</a>
            </div>
            <p>some text here about... bla bla</p>
        </div>
           <div id="about-image"></div>

    </div>
    <div class="portfolio">
        <div class="desc">
            <h3>psuedo elements,counters & tooltips</h3>
            <p>date</p>
            <p>description kk</p>
        </div>
        <img class="pic" src="<?php echo get_bloginfo('template_url')?>/pics/pic1.png"/>
    </div>
    <div class="portfolio">
        <div class="desc">
            <h3>loader</h3>
            <p>date</p>
            <p>description kk</p>
        </div>
        <img class="pic" src="<?php echo get_bloginfo('template_url')?>/pics/pic2.png"/>
    </div>
    <div class="portfolio">
        <div class="desc">
            <h3>synth</h3>
            <p>date</p>
            <p>description kk</p>
        </div>
        <img class="pic" src="<?php echo get_bloginfo('template_url')?>/pics/synth.png"/>
    </div>
    
</main>
<?php
get_footer();
