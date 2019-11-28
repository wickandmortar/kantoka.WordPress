    <!-- Footer section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <?php dynamic_sidebar('footer_col_1'); ?>

                </div>

                <div class="col-md-4">
                    <!-- <div class="footer-image-gellary">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.jpg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2.jpg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3.jpg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4.jpg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5.jpg" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/6.jpg" alt="">
                    </div>
                    <br>
                    <a href="https://www.instagram.com/shopkantoka/"> See More </a> -->
                    <?php dynamic_sidebar('footer_col_2'); ?>
                </div>

                <div class="col-md-4">
                    <!-- <p style="padding-left:15%">
                        <a href="mailto:info@kantoka.com">info@kantoka.com</a>
                    </p>
                    <div class="social-icon">
                        <ul>
                            <li><a href="https://www.twitter.com/shopkantoka/"><span class="iconify" data-icon="fa:twitter" data-inline="false"></span></a></li>
                            <li><a href="https://www.instagram.com/shopkantoka/"><span class="iconify" data-icon="fa:instagram" data-inline="false"></span></a></li>
                            <li><a href="https://www.twitter.com/shopkantoka/"><span class="iconify" data-icon="fa:linkedin" data-inline="false"></span></a></li>
                        </ul>
                    </div> -->
                    
                    <?php dynamic_sidebar('footer_col_3'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center copy_right">
                        &copy; 2019 Kantoka LLC. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>


    <?php wp_footer(); ?>
</body>
</html>