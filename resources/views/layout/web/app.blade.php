<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from template.annimexweb.com/optimal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 May 2022 14:40:01 GMT -->

<head>
    <!--Required Meta Tags-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="description" />
    <!-- Title Of Site -->
    <title>Optimal Multipurpose eCommerce Bootstrap 5 Html Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
</head>

<body class="template-index index-demo1">
    <!-- Page Loader -->
    <div id="pre-loader">
        <img src="{{asset('assets/images/loader.gif')}}" alt="Loading..." />
    </div>
    <!-- End Page Loader -->

    <!--Page Wrapper-->
    <div class="page-wrapper">
        <!--Header-->
        @include('layout.web.includes.header')
        <!--End Header-->
        <!--Mobile Menu-->
        @include('layout.web.includes.mobile_menu')
        <!--End Mobile Menu-->

        <!--Body Container-->
        @yield('content')
        <div id="page-content">
            <!--Home Slider-->

            <!--End Home Slider-->

            <!--Banner Masonary-->

            <!--End Banner Masonary-->

            <!--Best Seller-->

            <!--End Best Seller-->

            <!--Testimonial Slider-->

            <!--End Testimonial Slider-->

            <!--Store Feature-->

            <!--End Store Feature-->

            <!--Spring Summer Product Slider-->

            <!--End Spring Summer Product Slider-->

            <!--Banner Masonary-->

            <!--End Banner Masonary-->

            <!--Blog Post-->

            <!--End Blog Post-->

            <!--Brand Logo Slider-->
            @include('layout.web.includes.brand_logo_slider')
            <!--End Brand Logo Slider-->
        </div>
        <!--End Body Container-->

        <!--Footer-->
        @include('layout.web.includes.footer')
        <!--End Footer-->

        <!--Sticky Menubar Mobile-->
        @include('layout.web.includes.sticky_menu_mobile')
        <!--End Sticky Menubar Mobile-->

        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon an an-chevron-up"></i></span>
        <!--End Scoll Top-->

        <!--MiniCart Drawer-->
        @include('layout.web.includes.minicart_drawer')
        <!--End MiniCart Drawer-->
        <div class="modalOverly"></div>

        <!--Quickview Popup-->
        <div class="loadingBox">
            <div class="an-spin"><i class="icon an an-spinner4"></i></div>
        </div>
        @include('layout.web.includes.quickview_popup')
        <!--End Quickview Popup-->

        <!--Addtocart Added Popup-->
        @include('layout.web.includes.addtocart_added_popup')
        <!-- End Addtocart Added Popup-->

        <!--Product Promotion Popup-->

        <!--End Product Promotion Popup-->

        <!--Newsletter Popup-->
        @include('layout.web.includes.newsletter_popup')
        <!--End Newsletter Popup-->

        <!-- Including Jquery -->
        <script src="{{asset('assets/js/vendor/jquery-min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/js.cookie.js')}}"></script>
        <!--Including Javascript-->
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>

        <!--Newsletter Popup Cookies-->
        <script>
            function newsletter_popup() {
                var cookieSignup = "cookieSignup",
                    date = new Date();
                if (
                    $.cookie(cookieSignup) != "true" &&
                    window.location.href.indexOf("challenge#newsletter-modal") <= -1
                ) {
                    setTimeout(function() {
                        $.magnificPopup.open({
                            items: {
                                src: "#newsletter-modal",
                            },
                            type: "inline",
                            removalDelay: 300,
                            mainClass: "mfp-zoom-in",
                        });
                    }, 5000);
                }
                $.magnificPopup.instance.close = function() {
                    if ($("#dontshow").prop("checked") == true) {
                        $.cookie(cookieSignup, "true", {
                            expires: 1,
                            path: "/",
                        });
                    }
                    $.magnificPopup.proto.close.call(this);
                };
            }
            newsletter_popup();
        </script>
        <!--End Newsletter Popup Cookies-->
    </div>
    <!--End Page Wrapper-->
</body>

<!-- Mirrored from template.annimexweb.com/optimal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 May 2022 14:41:18 GMT -->

</html>
