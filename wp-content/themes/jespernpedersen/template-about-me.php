<?php 
/*
Template Name: About Me
Template Post Type: post, page, event
*/


get_header();
?>


<main role="main" id="about-me">
    <section id="skills">
        <h2>What I've worked with over the years</h2>
        <h3>CMS</h3>
        <section class="skill-showcase">
            <figure>
                <img src="/portfolio-v3/wp-content/uploads/2018/12/wordpress-logo.png" alt="WordPress Logo" />
            </figure>
            <figure>
                <img src="/portfolio-v3/wp-content/uploads/2018/12/joomla-logo.png" alt="Joomla Logo" />
            </figure>
            <figure>
                <img src="/portfolio-v3/wp-content/uploads/2018/12/Drupal-Logo.png" alt="Drupal Logo" />
            </figure>
        </section>
        <h3>Coding</h3>
        
        <section class="skill-showcase">
            <figure>
                <img src="/portfolio-v3/wp-content/uploads/2018/12/1200px-Node.js_logo.svg_.png" alt="Node.js Logo" />
            </figure>
            <figure>
                <img src="/portfolio-v3/wp-content/uploads/2018/12/php_PNG12.png" alt="PHP Logo" />
            </figure>
            <figure>
                <img src="/portfolio-v3/wp-content/uploads/2018/12/JavaScript-logo.png" alt="Drupal Logo" />
            </figure>
            <figure>
                <img src="/portfolio-v3/wp-content/uploads/2018/12/CSharp.png" alt="C# Logo" />
            </figure>
        </section>
        <h3>Programs</h3>
        
        <section class="skill-showcase">
            <figure>
                <img src="/portfolio-v3/wp-content/uploads/2018/12/visual-studio-logo.png" alt="Visual Studio Logo" />
            </figure>
            <figure>
                <img src="/portfolio-v3/wp-content/uploads/2018/12/photoshop-logo.png" alt="Photoshop Logo" />
            </figure>
            <figure>
                <img src="/portfolio-v3/wp-content/uploads/2018/12/illustrator-logo.png" alt="Illustrator Logo" />
            </figure>
            <figure>
                <img src="/portfolio-v3/wp-content/uploads/2018/12/premiere-logo.png" alt="Premiere Logo" />
            </figure>
            <figure>
                <img src="/portfolio-v3/wp-content/uploads/2018/12/ae-logo.png" alt="After Effects Logo" />
            </figure>
            <figure>
                <img src="/portfolio-v3/wp-content/uploads/2018/12/xd-logo.png" alt="XD Logo" />
            </figure>
            <figure>
                <img src="/portfolio-v3/wp-content/uploads/2018/12/indesign-logo.png" alt="InDesign Logo" />
            </figure>
        </section>
        <h3 class="misc">Misc</h3>
        
        <div class="project-tags">
            
        <span class="tag frontend">Frontend Dev</span>
                <span class="tag concept-development">Concept Development</span>
                <span class="tag javascript">JavaScript</span>
                <span class="tag websocket">WebSocket</span>
                <span class="tag project-management">Project Management</span>
                <span class="tag ux-ui">UX/UI Design</span>
                <span class="tag business">Business Planning</span>
                <span class="tag programming">Backend Dev</span>
                <span class="tag unity">Unity</span>
            </div>
    </section>
    <section id="me">
        <img src="/portfolio-v3/wp-content/uploads/2018/12/10864522_10202163292842659_1510925993_o.jpg" alt="A picture of Jesper" />
    </section>
    <section id="contact">
        <h2>Let's get in touch!</h2>
        <?php echo do_shortcode('[contact-form-7 id="102" title="Contact form 1"]'); ?>
    </section>
</main>


<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous">
</script> 
<script src="/portfolio-v3/wp-content/themes/jespernpedersen/assets/js/scripts.js"></script>
<?php
get_footer();