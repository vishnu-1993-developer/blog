<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    <x-partials.head :siteSetting="$siteSetting" />
   </head>

   <body>
       
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <header>
       <x-partials.header :menus="$menus" :siteSetting="$siteSetting" />
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
       <x-partials.footer :siteSetting="$siteSetting" />
    </footer>
    
     <!-- JS here -->
         <!-- All JS Custom Plugins Link Here here -->
         <script src={{ url('blog-assets/js/vendor/modernizr-3.5.0.min.js') }}></script>
         <!-- Jquery, Popper, Bootstrap -->
         <script src={{ url('blog-assets/js/vendor/jquery-1.12.4.min.js') }}></script>
         <script src={{ url('blog-assets/js/popper.min.js') }}></script>
         <script src={{ url('blog-assets/js/bootstrap.min.js') }}></script>
         <!-- Jquery Mobile Menu -->
         <script src={{ url('blog-assets/js/jquery.slicknav.min.js') }}></script>
    
         <!-- Jquery Slick , Owl-Carousel Plugins -->
         <script src={{ url('blog-assets/js/owl.carousel.min.js') }}></script>
         <script src={{ url('blog-assets/js/slick.min.js') }}></script>
         <!-- Date Picker -->
         <script src={{ url('blog-assets/js/gijgo.min.js') }}></script>
         <!-- One Page, Animated-HeadLin -->
         <script src={{ url('blog-assets/js/wow.min.js') }}></script>
         <script src={{ url('blog-assets/js/animated.headline.js') }}></script>
         <script src={{ url('blog-assets/js/jquery.magnific-popup.js') }}></script>
    
         <!-- Breaking New Pluging -->
         <script src={{ url('blog-assets/js/jquery.ticker.js') }}></script>
         <script src={{ url('blog-assets/js/site.js') }}></script>
    
         <!-- Scrollup, nice-select, sticky -->
         <script src={{ url('blog-assets/js/jquery.scrollUp.min.js') }}></script>
         <script src={{ url('blog-assets/js/jquery.nice-select.min.js') }}></script>
         <script src={{ url('blog-assets/js/jquery.sticky.js') }}></script>
         
         <!-- contact js -->
         <script src={{ url('blog-assets/js/contact.js') }}></script>
         <script src={{ url('blog-assets/js/jquery.form.js') }}></script>
         <script src={{ url('blog-assets/js/jquery.validate.min.js') }}></script>
         <script src={{ url('blog-assets/js/mail-script.js') }}></script>
         <script src={{ url('blog-assets/js/jquery.ajaxchimp.min.js') }}></script>
         
         <!-- Jquery Plugins, main Jquery -->	
         <script src={{ url('blog-assets/js/plugins.js') }}></script>
         <script src={{ url('blog-assets/js/main.js') }}></script>
         
     </body>
    </html>
