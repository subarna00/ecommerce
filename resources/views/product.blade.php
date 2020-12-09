@extends('layouts.front')
@section('content')
<!--w3l-banner-slider-main-->
<section class="w3l-banner-slider-main">
    <div class="top-header-content">
        <header class="tophny-header">
            <div class="container-fluid">
                <div class="top-right-strip row">
                    <!--/left-->
                    <div class="top-hny-left-content col-lg-6 pl-lg-0">
                        <h6>Upto 30% off on All styles , <a href="#" target="_blank"> Click here for <span
                                    class="fa fa-hand-o-right hand-icon" aria-hidden="true"></span> <span
                                    class="hignlaite">More details</span></a></h6>
                    </div>
                    <!--//left-->
                    <!--/right-->
                    <ul class="top-hnt-right-content col-lg-6">

                        <li class="button-log usernhy">
                            <a class="btn-open" href="#">
                                <span class="fa fa-user" aria-hidden="true"></span>
                            </a>
                        </li>
                        <li class="transmitvcart galssescart2 cart cart box_1">
                            <form action="#" method="post" class="last">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="display" value="1">
                                <button class="top_transmitv_cart" type="submit" name="submit" value="">
                                    My Cart
                                    <span class="fa fa-shopping-cart"></span>
                                </button>
                            </form>
                        </li>
                    </ul>
                    <!--//right-->
                    <div class="overlay-login text-left">
                        <button type="button" class="overlay-close1">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                        <div class="wrap">
                            <h5 class="text-center mb-4">Login Now | <a class="btn " href="{{ route('register') }}"
                                    style="    background-color: #e86913;
    border-color: #e86913; color:#fff;font-size: 18px;
    font-weight: bold;">{{ __('Register') }}</a>
                            </h5>
                            <div class="login-bghny p-md-5 p-4 mx-auto mw-100">
                                <!--/login-form-->
                                <form action="{{  route('login')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <p class="login-texthny mb-2">Email address</p>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <p class="login-texthny mb-2">Password</p>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            id="exampleInputPassword1" placeholder="" name="password" required
                                            autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-check mb-2">
                                        <div class="userhny-check">
                                            <label class="check-remember container">
                                                <input type="checkbox" class="form-check" name="remember" id="remember"
                                                    {{ old('remember') ? 'checked' : '' }}> <span
                                                    class="checkmark"></span>
                                                <p class="privacy-policy">Remember me</p>
                                            </label>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <button type="submit" class="submit-login btn mb-4">Sign In</button>

                                </form>
                                <!--//login-form-->
                            </div>
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
            <!--/nav-->
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid serarc-fluid">
                    <a class="navbar-brand" href="index.html">
                        Spry<span class="lohny">S</span>tore</a>
                    <!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.html">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
                    <!--/search-right-->
                    <div class="search-right">

                        <a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
                            <span class="search-text">Search here</span></a>
                        <!-- search popup -->
                        <div id="search" class="pop-overlay">
                            <div class="popup">

                                <form action="#" method="post" class="search-box">
                                    <input type="search" placeholder="Keyword" name="search" required="required"
                                        autofocus="">
                                    <button type="submit" class="btn">Search</button>
                                </form>

                            </div>
                            <a class="close" href="#">×</a>
                        </div>
                        <!-- /search popup -->
                    </div>
                    <!--//search-right-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fa fa-bars"> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">What We Offer</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <!--//nav-->
        </header>
        <div class="bannerhny-content">

            <!--/banner-slider-->
            <div class="content-baner-inf">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php
                    $count  = App\Models\Product::all()->count();
                    $count1 = $count;
                    for($i=0;$i<=$count1;$i++) { ?>
                        <?php if($i==1): ?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <?php else :?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php $i; ?>"></li>
                        <?php  endif ?>
                        <?php } ?>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                    $count  = App\Models\Product::all()->count();
                    $count1 = $count;
                    $i=0;
                   ?>
                        @foreach($randomActiveProducts as $product)
                        <?php 
                       
                        if($i==1): ?>
                        <div class="carousel-item active"
                            style="background: url({{Storage::url($product->image)}}) no-repeat center;background-size:cover ;">
                            <div class="container">

                                <div class="carousel-caption">
                                    <h3>
                                        Women's
                                        Fashion
                                        <br>50% Off</h3>
                                    <a href="#" class="shop-button btn">
                                        Shop Now
                                    </a>

                                </div>
                            </div>
                        </div>
                        <?php else :?>

                        <div class="carousel-item item2"
                            style="background: url({{Storage::url($product->image)}}) no-repeat center ;background-size:cover;">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h3>Men's
                                        Fashion
                                        <br>60% Off</h3>
                                    <a href="#" class="shop-button btn">
                                        Shop Now
                                    </a>

                                </div>
                            </div>
                        </div>
                        <?php  endif;
                         $i++;
                        ?>
                        @endforeach


                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!--//banner-slider-->
            <!--//banner-slider-->
            @foreach($randomItemProducts->take(1) as $product)
            <div class="right-banner"
                style="background: url({{Storage::url($product->image)}}) no-repeat center;background-size:cover;">
                <div class="right-1">
                    <h4>
                        Men's
                        Fashion
                        <br>50% Off</h4>
                </div>
            </div>
            @endforeach

        </div>

</section>
<!-- //w3l-banner-slider-main -->
<section class="w3l-grids-hny-2">
    <!-- /content-6-section -->
    <div class="grids-hny-2-mian py-5">
        <div class="container py-lg-5">

            <h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
            <p class="mb-4 text-center">Handpicked Favourites just for you</p>
            <div class="welcome-grids row mt-5">
                @foreach(\App\Models\Category::get()->take(6) as $category)
                <div class="col-lg-2 col-md-4 col-6 welcome-image">
                    <div class="boxhny13">
                        <a href="#URL">
                            <img src="{{Storage::url($category->image)}}" class="img-fluid" alt=""
                                style="height:165px;object-fit:cover;" />
                            <div class="boxhny-content">
                                <h3 class="title">{{$category->name}}
                            </div>
                        </a>
                    </div>
                    <h4><a href="#URL">{{$category->name}}</a></h4>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
<!-- //content-6-section -->

<section class="w3l-content-w-photo-6">
    <!-- /specification-6-->
    <div class="content-photo-6-mian py-5">
        <div class="container py-lg-5">
            <div class="align-photo-6-inf-cols row">

                <div class="photo-6-inf-right col-lg-6">
                    <h3 class="hny-title text-left">All Branded Men's Suits are Flat <span>30% Discount</span></h3>
                    <p>Visit our shop to see amazing creations from our designers.</p>
                    <a href="#" class="read-more btn">
                        Shop Now
                    </a>
                </div>
                <div class="photo-6-inf-left col-lg-6">
                    <img src="assets/images/1.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //specification-6-->

<section class="w3l-video-6">
    <!-- /video-6-->
    <div class="video-66-info">
        <div class="container-fluid">
            <div class="video-grids-info row">
                <div class="video-gd-right col-lg-8">
                    <div class="video-inner text-center">
                        <!--popup-->
                        <a class="play-button btn popup-with-zoom-anim" href="#small-dialog">
                            <span class="fa fa-play" aria-hidden="true"></span>
                        </a>
                        <div id="small-dialog" class="mfp-hide">
                            <div class="search-top notify-popup">
                                <iframe src="https://player.vimeo.com/video/246139491" frameborder="0"
                                    allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                        <!--//popup-->
                    </div>
                </div>
                <div class="video-gd-left col-lg-4 p-lg-5 p-4">
                    <div class="p-xl-4 p-0 video-wrap">
                        <h3 class="hny-title text-left">All Branded Women's Bags are Flat <span>30% Discount</span>
                        </h3>
                        <p>Visit our shop to see amazing creations from our designers.</p>
                        <a href="#" class="read-more btn">
                            Shop Now
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- //video-6-->
<section class="w3l-ecommerce-main">
    <!-- /products-->
    <div class="ecom-contenthny py-5">
        <div class="container py-lg-5">
            <h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
            <p class="text-center">Handpicked Favourites just for you</p>
            <!-- /row-->
            <div class="ecom-products-grids row mt-lg-5 mt-3">
                @foreach($randomActiveProducts as $product)
                <div class="col-lg-3 col-6 product-incfhny mt-4">
                    <div class="product-grid2 transmitv">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1 img-fluid" src="{{Storage::url($product->image)}}">
                                <img class="pic-2 img-fluid" src="{{Storage::url($product->flip_image)}}">
                            </a>
                            <ul class="social">
                                <li><a href="{{route('product.view',[$product->id])}}" data-tip="Quick View"><span
                                            class="fa fa-eye"></span></a></li>

                                <li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
                                </li>
                            </ul>
                            <div class="transmitv single-item">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="transmitv_item" value="{{$product->name}}">
                                    <input type="hidden" name="amount" value="{{$product->price}}">
                                    <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
                                        Add to Cart
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">{{$product->name}} </a></h3>
                            <span class="price">${{$product->price}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- //row-->
        </div>
    </div>
</section>
<!-- //products-->
<section class="w3l-content-5">
    <!-- /content-6-section -->
    <div class="content-5-main">
        <div class="container">
            <div class="content-info-in row">
                <div class="content-gd col-md-6 offset-lg-3 text-center">
                    <h3 class="hny-title two">
                        Tons of Products & Options to
                        <span>change</span></h3>
                    <p>Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit totam
                        animi consequatur saepe blanditiis.Lorem ipsum dolor sit amet,Ea consequuntur illum facere
                        aperiam sequi optio consectetur adipisicing elit..</p>
                    <a href="#" class="read-more-btn2 btn">
                        Shop Now
                    </a>

                </div>

            </div>

        </div>
    </div>
</section>
<!-- //content-6-section -->
<section class="w3l-post-grids-6">
    <!-- /post-grids-->
    <div class="post-6-mian py-5">
        <div class="container py-lg-5">
            <h3 class="hny-title text-center mb-0 ">Latest Blog <span>Posts</span></h3>
            <p class="mb-5 text-center">Handpicked Favourites just for you</p>
            <div class="post-hny-grids row mt-5">
                <div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
                    <a href="#">
                        <figure>
                            <img class="img-fluid" src="assets/images/bg1.jpg" alt="blog-image">
                        </figure>
                    </a>

                    <div class="blog-thumbhny-caption">
                        <ul class="blog-info-list">
                            <li><a href="#admin">By admin</a></li>
                            <li class="date-post">
                                Aug 10, 2020</li>
                        </ul>
                        <h4><a href="#">Here to bring your life style to the next level.</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
                    <a href="#">
                        <figure>
                            <img class="img-fluid" src="assets/images/bg2.jpg" alt="blog-image">
                        </figure>
                    </a>
                    <div class="blog-thumbhny-caption">
                        <ul class="blog-info-list">
                            <li><a href="#admin">By admin</a></li>
                            <li class="date-post">
                                Aug 10, 2020</li>
                        </ul>
                        <h4><a href="#">Here to bring your life style to the next level.</a></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
                    <figure>
                        <img class="img-fluid" src="assets/images/bg3.jpg" alt="blog-image">
                    </figure>
                    <div class="blog-thumbhny-caption">
                        <ul class="blog-info-list">
                            <li><a href="#admin">By admin</a></li>
                            <li class="date-post">
                                Aug 10, 2020</li>
                        </ul>
                        <h4><a href="#">Here to bring your life style to the next level.</a></h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
                    <figure>
                        <img class="img-fluid" src="assets/images/bg4.jpg" alt="blog-image">
                    </figure>
                    <div class="blog-thumbhny-caption">
                        <ul class="blog-info-list">
                            <li><a href="#admin">By admin</a></li>
                            <li class="date-post">
                                Aug 10, 2020</li>
                        </ul>
                        <h4><a href="#">Here to bring your life style to the next level.</a></h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- //post-grids-->
<section class="w3l-customers-sec-6">
    <div class="customers-sec-6-cintent py-5">
        <!-- /customers-->
        <div class="container py-lg-5">
            <h3 class="hny-title text-center mb-0 ">Customers <span>Love</span></h3>
            <p class="mb-5 text-center">What People Say</p>
            <div class="row customerhny my-lg-5 my-4">
                <div class="col-md-12">
                    <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#customerhnyCarousel" data-slide-to="1"></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="customer-info text-center">
                                            <div class="feedback-hny">
                                                <span class="fa fa-quote-left"></span>
                                                <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                    adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                    quas nihil quasis.</p>
                                            </div>
                                            <div class="feedback-review mt-4">
                                                <img src="assets/images/c1.jpg" class="img-fluid" alt="">
                                                <h5>Smith Roy</h5>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="customer-info text-center">
                                            <div class="feedback-hny">
                                                <span class="fa fa-quote-left"></span>
                                                <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                    adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                    quas nihil quasis.</p>
                                            </div>
                                            <div class="feedback-review mt-4">
                                                <img src="assets/images/c2.jpg" class="img-fluid" alt="">
                                                <h5>Lora Grill</h5>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="customer-info text-center">
                                            <div class="feedback-hny">
                                                <span class="fa fa-quote-left"></span>
                                                <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                    adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                    quas nihil quasis.</p>
                                            </div>
                                            <div class="feedback-review mt-4">
                                                <img src="assets/images/c3.jpg" class="img-fluid" alt="">
                                                <h5>Laura Sten</h5>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="customer-info text-center">
                                            <div class="feedback-hny">
                                                <span class="fa fa-quote-left"></span>
                                                <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                    adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                    quas nihil quasis.</p>
                                            </div>
                                            <div class="feedback-review mt-4">
                                                <img src="assets/images/c4.jpg" class="img-fluid" alt="">
                                                <h5>John Lee</h5>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="customer-info text-center">
                                            <div class="feedback-hny">
                                                <span class="fa fa-quote-left"></span>
                                                <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                    adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                    quas nihil quasis.</p>
                                            </div>
                                            <div class="feedback-review mt-4">
                                                <img src="assets/images/c4.jpg" class="img-fluid" alt="">
                                                <h5>John Lee</h5>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="customer-info text-center">
                                            <div class="feedback-hny">
                                                <span class="fa fa-quote-left"></span>
                                                <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                    adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                    quas nihil quasis.</p>
                                            </div>
                                            <div class="feedback-review mt-4">
                                                <img src="assets/images/c3.jpg" class="img-fluid" alt="">
                                                <h5>Laura Sten</h5>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="customer-info text-center">
                                            <div class="feedback-hny">
                                                <span class="fa fa-quote-left"></span>
                                                <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                    adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                    quas nihil quasis.</p>
                                            </div>
                                            <div class="feedback-review mt-4">
                                                <img src="assets/images/c1.jpg" class="img-fluid" alt="">
                                                <h5>Smith Roy</h5>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="customer-info text-center">
                                            <div class="feedback-hny">
                                                <span class="fa fa-quote-left"></span>
                                                <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                                    adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                                    quas nihil quasis.</p>
                                            </div>
                                            <div class="feedback-review mt-4">
                                                <img src="assets/images/c2.jpg" class="img-fluid" alt="">
                                                <h5>Lora Grill</h5>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
        </div>
    </div>
</section>
<!-- //customers-->
<section class="w3l-subscription-6">
    <!--/customers -->
    <div class="subscription-infhny">
        <div class="container-fluid">

            <div class="subscription-grids row">

                <div class="subscription-right form-right-inf col-lg-6 p-md-5 p-4">
                    <div class="p-lg-5 py-md-0 py-3">
                        <h3 class="hny-title">Join us for FREE to get instant <span>email updates!</span></h3>
                        <p>Subscribe and get notified at first on the latest update and offers!</p>

                        <form action="#" method="post" class="signin-form mt-lg-5 mt-4">
                            <div class="forms-gds">
                                <div class="form-input">
                                    <input type="email" name="" placeholder="Your email here" required="">
                                </div>
                                <div class="form-input"><button class="btn">Join</button></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="subscription-left forms-25-info col-lg-6 ">

                </div>
            </div>

            <!--//customers -->
        </div>
</section>
<!-- //customers-6-->


<section class="w3l-footer-22">
    <!-- footer-22 -->
    <div class="footer-hny py-5">
        <div class="container py-lg-5">
            <div class="text-txt row">
                <div class="left-side col-lg-4">
                    <h3><a class="logo-footer" href="index.html">
                            Spry<span class="lohny">S</span>tore</a></h3>
                    <!-- if logo is image enable this   
                                    <a class="navbar-brand" href="#index.html">
                                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                                    </a> -->
                    <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur.Vivamus
                        a ligula quam. Ut blandit eu leo non suscipit. </p>
                    <ul class="social-footerhny mt-lg-5 mt-4">

                        <li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                        </li>
                        <li><a class="twitter" href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                        </li>
                        <li><a class="google" href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                        </li>
                        <li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                        </li>
                    </ul>
                </div>

                <div class="right-side col-lg-8 pl-lg-5">
                    <h4>Women's Day Special Offer
                        All Branded Sandals are Flat 50% Discount</h4>
                    <div class="sub-columns">
                        <div class="sub-one-left">
                            <h6>Useful Links</h6>
                            <div class="footer-hny-ul">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms and Conditions</a></li>
                                    <li><a href="contact.html">Support</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="sub-two-right">
                            <h6>Our Store</h6>
                            <p class="mb-5">49436 Broaddus Honey Court Avenue, Madisonville KY 95020, United States of
                                America</p>

                            <h6>We accept:</h6>
                            <ul>
                                <li><a class="pay-method" href="#"><span class="fa fa-cc-visa"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="pay-method" href="#"><span class="fa fa-cc-mastercard"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="pay-method" href="#"><span class="fa fa-cc-paypal"
                                            aria-hidden="true"></span></a>
                                </li>
                                <li><a class="pay-method" href="#"><span class="fa fa-cc-amex"
                                            aria-hidden="true"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="below-section row">
                <div class="columns col-lg-6">
                    <ul class="jst-link">
                        <li><a href="#">Privacy Policy </a> </li>
                        <li><a href="#">Term of Service</a></li>
                        <li><a href="contact.html">Customer Care</a> </li>
                    </ul>
                </div>
                <div class="columns col-lg-6 text-lg-right">
                    <p>© 2020 SpryStore. All rights reserved. Design by <a href="https://w3layouts.com/"
                            target="_blank">
                            W3Layouts</a>
                    </p>
                </div>
                <button onclick="topFunction()" id="movetop" title="Go to top">
                    <span class="fa fa-angle-double-up"></span>
                </button>
            </div>
        </div>
    </div>
    <!-- //titels-5 -->
    <!-- move top -->

    @endsection
