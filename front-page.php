<?php get_header(); ?>

<!-- Hero Banner Section with Overlay Content -->
<section class="hero" id="hero">
    
    <img class="banner-image" src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="Banner" loading="lazy">
    
    <div class="hero-content">
        <h1>Transform Your Online Presence</h1>
        <p>We build websites that are fast, beautiful, and SEO-friendly.</p>
        <a href="#" class="btn-primary">Get Started</a>
    </div>

</section>

<!-- Service Section Separate -->
<section class="services"  id="services">
    <h2>Our Services</h2>

    <div class="service-list">
        
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bg1.jpg" alt="Service 1">
            <h3>Web Design</h3>
            <p>We craft responsive and modern website designs tailored to your business.</p>
        </div>

        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bg2.jpg" alt="Service 2">
            <h3>Development</h3>
            <p>Our expert developers build fast, SEO-friendly, and secure websites.</p>
        </div>

        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bg3.jpg" alt="Service 3">
            <h3>Support & Maintenance</h3>
            <p>We offer ongoing website support and maintenance for smooth performance.</p>
        </div>

    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials" id="testimonials">
    <h2>What Our Clients Say</h2>

    <div class="testimonial-list">
    <?php
    $test_query = new WP_Query(array('post_type' => 'testimonials'));
    if ($test_query->have_posts()) :
        while ($test_query->have_posts()) : $test_query->the_post(); ?>
            
            <div class="testimonial-item">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="testimonial-img">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                <?php endif; ?>
                
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </div>

    <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</section>
<section class="contact" id="contact">
    <h2>Contact Us</h2>

    <div class="contact-container">
        <form class="contact-form" action="#" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit" class="btn-primary">Send Message</button>
        </form>
        
        <div class="contact-info">
            <h3>Our Details</h3>
            <p>Email: anuoviya181@gmail.com</p>
            <p>Phone: +91 7603826118</p>
            <p>Address: Rajapalayam, Tamil Nadu</p>
        </div>
    </div>
</section>


<?php get_footer(); ?>
