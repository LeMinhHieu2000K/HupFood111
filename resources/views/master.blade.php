<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mironmahmud.com/greeny/assets/ltr/home-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 03:54:06 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="template" content="greeny">
    <meta name="title" content="greeny - Ecommerce Food Store HTML Template">
    <meta name="keywords"
        content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, products, farm, grocery, natural, online">
    <title>Grid Home - Greeny</title>
    <base href="{{asset('')}}">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/fonts/icofont/icofont.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/fontawesome.min.css">
    <link rel="stylesheet" href="assets/vendor/venobox/venobox.min.css">
    <link rel="stylesheet" href="assets/vendor/slickslider/slick.min.css">
    <link rel="stylesheet" href="assets/vendor/niceselect/nice-select.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/home-grid.css">
</head>

<body>
   
    <div class="backdrop"></div><a class="backtop fas fa-arrow-up"  onclick="rollUp()"></a>
    @include('page.header')

    @yield('content')

    @include('page.footer')


    <script src="assets/vendor/bootstrap/jquery-1.12.4.min.js"></script>
    <script src="assets/vendor/bootstrap/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="assets/vendor/countdown/countdown.min.js"></script>
    <script src="assets/vendor/niceselect/nice-select.min.js"></script>
    <script src="assets/vendor/slickslider/slick.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/accordion.js"></script>
    <script src="assets/js/venobox.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/main.js"></script>


    <script>
        function rollUp(){
            window.scrollTo({
                     top: 0,
                       behavior: `smooth`})}

    </script>
</body>
<!-- Mirrored from mironmahmud.com/greeny/assets/ltr/home-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 03:54:07 GMT -->

</html>