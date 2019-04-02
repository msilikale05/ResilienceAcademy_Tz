

<!-- content-info adds the triangly bits behind the div -->

<?php wp_footer(); ?>
    <div class="site-footer">

    <div class="footer-content">
        <div class="footer-item">
            <h4>University Partners</h4>
            <div  style="border-color: #f9a970" class="footer-divider"></div>
            <div class="footer-social-media">
                <div> University of Dar es salaam</div>
                <div> Ardhi University</div>
                <div> Sokoine University of Agriculture</div>
                <div> State University of Zanzibar</div>
            </div>
        </div>

        <div class="footer-item">
            <h4>Quick Links</h4>
            <div style="border-color: #edd587" class="footer-divider"></div>
            <div class="footer-social-media">
                <div> Tanzania Resilience Academy</div>
                <div> Urban Resilience Competency</div>
                <div> Training Modules</div>
                <div> News and Events</div>
            </div>
        </div>
        
        <div class="footer-item">
            <h4>Connect - Community</h4>
            <div style="border-color: #f2623a" class="footer-divider"></div>
            <div class="footer-social-media">
                <div> University of Turku, Finland</div>
                <div> Delft University</div>
                <div> Ramani Huria</div>
                <div> Humanitarian OpenStreetMap Team</div>
            </div>
        </div>

        <div class="footer-item">
            <h4>Follow us</h4>  
            <div style="border-color: #1729ed" class="footer-divider"></div>
            <div class="footer-social-media">
                <div><img src="<?php echo get_bloginfo('template_directory'); ?>/img/icons/facebook-icon.png" alt="facebook" width="30" height="30"/> <a href="<?php echo get_option('facebook_url'); ?>" target="_blank">Facebook</a></div>
                <div><img src="<?php echo get_bloginfo('template_directory'); ?>/img/icons/twitter-icon.png" alt="facebook" width="30" height="30"/> <a href="<?php echo get_option('twitter_url'); ?>" target="_blank">Twitter</a></div>
                <div><img src="<?php echo get_bloginfo('template_directory'); ?>/img/icons/mobile-icon.png" alt="facebook" width="30" height="25"/> Mobile: <?php echo get_option('mobile_url'); ?></div>
            </div>
        </div>
        <div>
        <div class="announce-card">
        <a href="#home" ><h2>Interested<br>in Urban <br/>Resilience?<br/> <br> Check out!<h2></a>
    </div>
</div>
    </div>
</div>

<div class="footer-copyright">
    Copyright &copy;2019 Resilience Academy
    </div>
   </body>
</html>