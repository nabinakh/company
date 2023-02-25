<!doctype html>
<html lang="en">
  
<!-- Mirrored from templates.iqonic.design/markethon/layout-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Feb 2023 08:29:31 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Markethon - Digital Marketing Agency Responsive HTML5 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- Settings CSS -->
    <link rel="stylesheet" href="{{asset('frontend/revslider/css/settings.css')}}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/typography.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    @yield('css')

  </head>
  <body>
    <!-- loading -->
    <div id="loading">
      <div id="loading-center">
        <img src="{{asset('frontend/images/loader.gif')}}" alt="loder">
      </div>
    </div>
    <!-- loading End -->
    <!-- Header -->
@include('frontend.layouts.header')
    <!-- Header END -->
    <!-- Banner -->
 @include('frontend.layouts.banner')

 <div class="main-content">
 @yield('content')
    </div>
  
    @include('frontend.layouts.footer')


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('frontend/js/jquery-min.js')}}" ></script>
    <!-- popper  -->
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <!--  bootstrap -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}" ></script>
    <!-- Modernizr JavaScript -->
    <script src="{{asset('frontend/js/modernizr.js')}}"></script>
    <!-- Appear JavaScript -->
    <script src="{{asset('frontend/js/appear.min.js')}}"></script>
    <!-- Megamenu  -->
    <script src="{{asset('frontend/js/mega_menu.min.js')}}"></script>
    <!-- Timeline JavaScript -->
    <script src="{{asset('frontend/js/timeline.js')}}"></script>
    <!-- Wow -->
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <!-- scrollme -->
    <script src="{{asset('frontend/js/jquery.scrollme.min.js')}}"></script>
    <!-- countdown JavaScript -->
    <script src="{{asset('frontend/js/countdown.js')}}"></script>
    <!-- waypoints JavaScript -->
    <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Isotope JavaScript -->
    <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <!-- Progressbar JavaScript -->
    <script src="{{asset('frontend/js/circle-progress.min.js')}}"></script>
    <!-- Canvas JavaScript -->
    <script src="{{asset('frontend/js/canvasjs.min.js')}}"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="{{asset('frontend/revslider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('frontend/revslider/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{asset('frontend/revslider/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('frontend/revslider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/revslider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('frontend/revslider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('frontend/revslider/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('frontend/revslider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('frontend/revslider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('frontend/revslider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('frontend/revslider/js/extensions/revolution.extension.video.min.js')}}"></script>
    <!-- Retina JavaScript -->
    <script src="{{asset('frontend/js/retina.min.js')}}"></script>
    <!-- Custom JavaScript -->
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script>
    var tpj=jQuery;

    var revapi3;
    tpj(document).ready(function() {
    if(tpj("#rev_slider_3_1").revolution == undefined){
    revslider_showDoubleJqueryError("#rev_slider_3_1");
    }else{
    revapi3 = tpj("#rev_slider_3_1").show().revolution({
    sliderType:"standard",
    jsFileLocation:"//localhost/revslider-standalone/revslider-standalone/revslider/public/revslider/assets/js/",
    sliderLayout:"fullwidth",
    dottedOverlay:"none",
    delay:9000,
    navigation: {
    onHoverStop:"off",
    },
    visibilityLevels:[1240,1024,778,480],
    gridwidth:1366,
    gridheight:790,
    lazyType:"none",
    parallax: {
    type:"mouse",
    origo:"enterpoint",
    speed:400,
    levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
    type:"mouse",
    disable_onmobile:"on"
    },
    shadow:0,
    spinner:"spinner0",
    stopLoop:"off",
    stopAfterLoops:-1,
    stopAtSlide:-1,
    shuffle:"off",
    autoHeight:"off",
    disableProgressBar:"on",
    hideThumbsOnMobile:"off",
    hideSliderAtLimit:0,
    hideCaptionAtLimit:0,
    hideAllCaptionAtLilmit:0,
    debugMode:false,
    fallbacks: {
    simplifyAll:"off",
    nextSlideOnWindowFocus:"off",
    disableFocusListener:false,
    }
    });
    }
    }); /*ready*/
    </script>
           @yield('js')

  </body>

<!-- Mirrored from templates.iqonic.design/markethon/layout-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Feb 2023 08:30:07 GMT -->
</html>