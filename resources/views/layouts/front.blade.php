<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hamro E-commerce Ramro E-commerce</title>
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('user/assets/css/style-starter.css')}}">
    <!-- Template CSS -->
    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.12/dist/css/uikit.min.css" />

</head>

<body>
    @yield('content')
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>
    <!-- /move top -->
    </section>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.12/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.12/dist/js/uikit-icons.min.js"></script>
</body>

</html>
<script src="{{asset('user/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('user/assets/js/jquery-2.1.4.min.js')}}"></script>
<!--/login-->
<script>
    $(document).ready(function () {
        $(".button-log a").click(function () {
            $(".overlay-login").fadeToggle(200);
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });
    });
    $('.overlay-close1').on('click', function () {
        $(".overlay-login").fadeToggle(200);
        $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });

</script>
<!--//login-->
<script>
    // optional
    $('#customerhnyCarousel').carousel({
        interval: 5000
    });

</script>
<!-- cart-js -->
<script src="{{asset('user/assets/js/minicart.js')}}"></script>
<script>
    transmitv.render();

    transmitv.cart.on('transmitv_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });

</script>
<!-- //cart-js -->
<!--pop-up-box-->
<script src="{{asset('user/assets/js/jquery.magnific-popup.js')}}"></script>
<!--//pop-up-box-->
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });

</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });

</script>
<!-- disable body scroll which navbar is in active -->
<script src="{{asset('user/assets/js/bootstrap.min.js')}}"></script>
