<?php 
/*
Template Name: Full-width layout
Template Post Type: post, page, event
*/


get_header();
?>

<main role="main" id="frontpage">

    <section id="portfolio-slider-section">
        <!-- SEO friendly information about myself -->
        <article id="profile" itemscope itemtype="http://schema.org/Person">
            <h1 itemprop="name">Hi! My name is Jesper</h1>
            <p itemprop="jobTitle">I aspire to realize my ideas through technology.</p>
            <img src="/portfolio-v3/wp-content/uploads/2018/12/13718519_10205004085860709_9041351760399082318_n.jpg" id="profile-image" itemprop="image" alt="A picture of myself" />
            

                <div id="social-media" class="social-media">
                    <div class="social-media-item">
                        <a class="social-icon-linkedin" href="https://www.linkedin.com/in/jespernpedersen/" target="_blank" title="Se min Linkedin for flere informationer!"><img src="/portfolio-v3/wp-content/themes/jespernpedersen/assets/images/linkedin.svg" alt="LinkedIn icon" /></a>
                    </div>
                </div>
            <h4 class="country" itemprop="nationality">Denmark, Europe</h4>
        </article>
        
        <!-- Here I begin my case portfolio slider. It has some heavy JavaScript and CSS tied to it -->
        <div id="portfolio-slider" class="card-carousel">
                <!-- For each item it writes the code itself differently to adjust for the left and top positioning of the elements within -->
                <div class="my-card" id="first-item">
                    <div class="inner-item">
                        <div class="left">
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/iPad-Asteria.png" alt="iPad showcase of Tag Water concept" />
                        </div>
                        <div class="center">
                            <h3>Hotel Asteria</h3>
                            
                            <div class="project-tags">
                            <h4>In this project I've contributed and worked with:</h4>
                                <span class="tag project-management">Project Management</span>
                                <span class="tag frontend">Frontend Dev</span>
                                <span class="tag ux-ui">UX/UI Design</span>
                                <span class="tag business">Business Planning</span>
                                <span class="tag concept-development">Concept Development</span>
                            </div>
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/desktop-hotel-asteria.png" alt="Desktop showcase of Hotel Asteria concept">
                            <a href="http://jespernpedersen.dk/hotel-asteria/" target="_blank" title="View my case of Hotel Asteria" class="portfolio-btn">Take a look!</a>
                        </div>
                        <div class="right">
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/iPhone-Asteria.png" alt="iPhone showcase of Hotel Asteria concept" />
                        </div>
                    </div>
                </div>
                <div class="my-card">
                    <div class="inner-item">
                        <div class="left">
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/iPad-hopla-dancing.png" alt="iPad showcase of Hopla Riding" />
                        </div>
                        <div class="center">
                            <h3>Hopla Dancing</h3>
                            
                            <div class="project-tags">
                            <h4>In this project I've contributed and worked with:</h4>
                                <span class="tag project-management">Project Management</span>
                                <span class="tag frontend">Frontend Dev</span>
                                <span class="tag ux-ui">UX/UI Design</span>
                            </div>
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/desktop-hopla-dancing-1.png" alt="Desktop showcase of Hopla Riding">
                            <a href="http://jespernpedersen.dk/hopla/" target="_blank" class="portfolio-btn">Take a look!</a>
                        </div>
                        <div class="right">
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/iPhone-hopla-dancing.png" alt="iPhone showcase of Hopla Riding" />
                        </div>
                    </div>
                </div>
                
                <div class="my-card">
                    <div class="inner-item">
                        <div class="left">
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/iPad-TagWater.png" alt="iPad showcase of Tag Water concept" />
                        </div>
                        <div class="center">
                            <h3>Tag Water</h3>
                            
                            <div class="project-tags">
                            <h4>In this project I've contributed and worked with:</h4>
                                <span class="tag project-management">Project Management</span>
                                <span class="tag frontend">Frontend Dev</span>
                                <span class="tag ux-ui">UX/UI Design</span>
                                <span class="tag wordpress">WordPress</span>
                                <span class="tag programming">Backend Dev</span>
                                <span class="tag concept-development">Concept Development</span>
                            </div>
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/desktop-tag-water.png" alt="Desktop showcase of Tag Water concept">
                            <a href="http://jespernpedersen.dk/tag-water" target="_blank" title="View my case of Tag Water" class="portfolio-btn">Take a look!</a>
                        </div>
                        <div class="right">
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/iPhone-TagWater.png" alt="iPhone showcase of Tag Water concept" />
                        </div>
                    </div>
                </div>
                <section class="my-card">
                    <section class="inner-item">
                        <figure class="left">
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/iPad-RLA.png" alt="iPad showcase of RLA" />
                        </figure>
                        <article class="center">
                            <h3>RLA</h3>
                            <div class="project-tags">
                                <h4>In this project I've contributed and worked with:</h4>
                                <span class="tag project-management">Project Management</span>
                                <span class="tag frontend">Frontend Dev</span>
                                <span class="tag ux-ui">UX/UI Design</span>
                                <span class="tag wordpress">WordPress</span>
                                <span class="tag programming">Backend Dev</span>
                            </div>
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/desktop-rla.png" alt="Desktop showcase of RLA">
                            <a href="http://rla.jespernpedersen.dk/" target="_blank" title="View my case of RLA" class="portfolio-btn">Take a look!</a>
                        </article>
                        <figure class="right">
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/iPhone-rla.png" alt="iPhone showcase of RLA" />
                        </figure>
                    </section>
                </section>
                <div class="my-card">
                    <div class="inner-item">
                        <div class="left">
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/iPad-Hopla-Ridning-1.png" alt="iPad showcase of Hopla Riding" />
                        </div>
                        <div class="center">
                            <h3>Hopla Riding</h3>
                            <div class="project-tags">
                            <h4>In this project I've contributed and worked with:</h4>
                                <span class="tag project-management">Project Management</span>
                                <span class="tag frontend">Frontend Dev</span>
                                <span class="tag ux-ui">UX/UI Design</span>
                            </div>
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/Desktop-Hopla-Ridning-1.png" alt="Desktop showcase of Hopla Riding">
                            <a href="http://jespernpedersen.dk/MMD/hopla-ridning/" target="_blank" class="portfolio-btn">Take a look!</a>
                        </div>
                        <div class="right">
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/iPhone-hopla-ridning.png" alt="iPhone showcase of Hopla Riding" />
                        </div>
                    </div>
                </div>
                <div class="my-card">
                    <div class="inner-item">
                        <div class="left">
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/iPad-ecclesia.png" alt="iPad showcase of Ecclesia" />
                        </div>
                        <div class="center">
                            <h3>Ecclesia</h3>
                            <div class="project-tags">
                                <h4>In this project I've contributed and worked with:</h4>
                                <span class="tag nodejs">Node.js</span>
                                <span class="tag javascript">JavaScript</span>
                                <span class="tag websocket">WebSocket</span>
                                <span class="tag frontend">Frontend Dev</span>
                                <span class="tag ux-ui">UX/UI Design</span>
                                <span class="tag business">Business Planning</span>
                                <span class="tag programming">Backend Dev</span>
                                <span class="tag concept-development">Concept Development</span>
                                <span class="tag database">MySQL</span>
                                <span class="tag project-management">Project Management</span>
                            </div>
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/desktop-ecclesia.png" alt="Desktop showcase of Ecclesia">
                            <a href="http://ecclesia-web.herokuapp.com/" target="_blank" title="Preview Ecclesia" class="portfolio-btn">Take a look!</a>
                        </div>
                        <div class="right">
                            <img src="/portfolio-v3/wp-content/uploads/2018/12/iPhone-ecclesia.png" alt="iPhone showcase of Ecclesia" />
                        </div>
                    </div>
                </div>
            </div>
    </section>

</main>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
        integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" 
        crossorigin="anonymous">
</script> 
<script src="/portfolio-v3/wp-content/themes/jespernpedersen/assets/js/behaviour.js"></script>

<script src="/portfolio-v3/wp-content/themes/jespernpedersen/assets/js/scripts.js"></script>
<?php
get_footer();