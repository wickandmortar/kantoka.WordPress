    <!-- Footer section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer_col_1'); ?>
                </div>

                <div class="col-md-4">
                    <?php dynamic_sidebar('footer_col_2'); ?>
                </div>

                <div class="col-md-4">
                    <?php dynamic_sidebar('footer_col_3'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center copy_right">
                        ©2019 Kantoka Technologies, Inc. All Rights Reserved.
                        <a href="/privacy-policy"> &nbsp;Privacy Policy </a> | <a href="/terms-of-use">Terms of Use </a>
    <a href="http://wickandmortar.com"> &nbsp; Website by Wick & Mortar</a> 
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
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.js"></script>


    <?php wp_footer(); ?>
</body>
</html>