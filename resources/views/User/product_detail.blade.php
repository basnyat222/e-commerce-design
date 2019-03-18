@extends('User.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body>

<!--================Menu Area =================-->
<header class="shop_header_area carousel_menu_area">
    <div class="carousel_top_header row m0">
        <div class="container">
            <div class="carousel_top_h_inner">
                <div class="float-md-left">
                    <div class="top_header_left">
                        <div class="selector">
                            <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                <option value='yt' data-image="img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                                <option value='yu' data-image="img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                <option value='yt' data-image="img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                                <option value='yu' data-image="img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                            </select>
                        </div>
                        <select class="selectpicker usd_select">
                            <option>USD</option>
                            <option>$</option>
                            <option>$</option>
                        </select>
                    </div>
                </div>
                <div class="float-md-right">
                    <div class="top_header_middle">
                        <a href="#"><i class="fa fa-phone"></i> Call Us: <span>+84 987 654 321</span></a>
                        <a href="#"><i class="fa fa-envelope"></i> Email: <span>support@yourdomain.com</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel_menu_inner">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="{{asset('img/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{asset('index.html')}}">Home Simple</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('home-carousel.html')}}">Home Carousel</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('home-fullwidth.html')}}">Home Full Width</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('home-parallax.html')}}">Home Parallax</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('home-sidebar.html')}}">Home Boxed</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('home-fixed-menu.html')}}">Home Fixed</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{asset('compare.html')}}">Compare</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('checkout.html')}}">Checkout Method</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('register.html')}}">Checkout Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('track.html')}}">Track</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('login.html')}}">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('404.html')}}">404</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu active">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Shop <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{asset('categories-no-sidebar-2column.html')}}">Prodcut No Sidebar</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('categories-no-sidebar-3column.html')}}">Prodcut Two Column</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('categories-no-sidebar-4column.html')}}">Product Grid</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('categories-left-sidebar.html')}}">Categories Left Sidebar</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('categories-right-sidebar.html')}}">Categories Right Sidebar</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('categories-grid-left-sidebar.html')}}">Categories Grid Sidebar</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('product-details.html')}}">Prodcut Details 01</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('product-details2.html')}}">Prodcut Details 02</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('product-details3.html')}}">Prodcut Details 03</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('shopping-cart.html')}}">Shopping Cart 01</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('shopping-cart2.html')}}">Shopping Cart 02</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{asset('empty-cart.html')}}">Empty Cart</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">lookbook</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{asset('contact.html')}}">Contact</a></li>
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li class="search_icon"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                        <li class="user_icon"><a href="#"><i class="icon-user icons"></i></a></li>
                        <li class="cart_cart"><a href="#"><i class="icon-handbag icons"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--================End Menu Area =================-->

<!--================Categories Banner Area =================-->
<section class="categories_banner_area">
    <div class="container">
        <div class="c_banner_inner">
            <h3>simple product</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li class="current"><a href="#">Simple Product</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Categories Banner Area =================-->

<!--================Product Details Area =================-->
<section class="product_details_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="product_details_slider">
                    <div id="product_slider" class="rev_slider" data-version="5.3.1.6">
                        <ul>	<!-- SLIDE  -->
                            <li data-index="rs-137221490" data-transition="scaledownfrombottom" data-slotamount="7"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="{{asset('img/product/product-details/p-details-tab-1.jpg')}}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Ishtar X Tussilago" data-param1="25/08/2015" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('img/product/product-details/p-details-big-1.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-136228343" data-transition="scaledownfrombottom" data-slotamount="7"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="{{asset('img/product/product-details/p-details-tab-2.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Los Angeles" data-param1="13/08/2015" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('img/product/product-details/p-details-big-1.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-135960434" data-transition="scaledownfrombottom" data-slotamount="7"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="{{asset('img/product/product-details/p-details-tab-3.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="The Colors of Feelings" data-param1="11/08/2015" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('img/product/product-details/p-details-big-1.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->


                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-134008155" data-transition="scaledownfrombottom" data-slotamount="7"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="{{asset('img/product/product-details/p-details-tab-4.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Powerful Iceland" data-param1="20/07/2015" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('img/product/product-details/p-details-big-1.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-134774977" data-transition="scaledownfrombottom" data-slotamount="7"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="{{asset('img/product/product-details/p-details-tab-1.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Paris Poetry" data-param1="28/07/2015" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('img/product/product-details/p-details-big-1.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-134208766" data-transition="scaledownfrombottom" data-slotamount="7"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="{{asset('img/product/product-details/p-details-tab-2.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Creativity Room - New Fubiz 2015" data-param1="22/07/2015" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('img/product/product-details/p-details-big-1.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-132884121" data-transition="scaledownfrombottom" data-slotamount="7"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="{{asset('img/product/product-details/p-details-tab-3.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Animated GIFS - New Fubiz 2015" data-param1="07/07/2015" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('img/product/product-details/p-details-big-1.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-130740141" data-transition="scaledownfrombottom" data-slotamount="7"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="{{asset('img/product/product-details/p-details-tab-4.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Naive New Beaters - Run Away" data-param1="15/06/2015" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{asset('img/product/product-details/p-details-big-1.jpg')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                            </li>
                            <!-- SLIDE  -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="product_details_text">
                    <h3>Nike Flex Run Tracksuit</h3>
                    <ul class="p_rating">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                    <div class="add_review">
                        <a href="#">5 Reviews</a>
                        <a href="#">Add your review</a>
                    </div>
                    <h6>Available In <span>Stock</span></h6>
                    <h4>$45.05</h4>
                    <p>Curabitur semper varius lectus sed consequat. Nam accumsan dapibus sem, sed lobortis nisi porta vitae. Ut quam tortor, facilisis nec laoreet consequat, malesuada a massa. Proin pretium tristique leo et imperdiet.</p>
                    <div class="p_color">
                        <h4 class="p_d_title">color <span>*</span></h4>
                        <ul class="color_list">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="p_color">
                        <h4 class="p_d_title">size <span>*</span></h4>
                        <select class="selectpicker">
                            <option>Select your size</option>
                            <option>Select your size M</option>
                            <option>Select your size XL</option>
                        </select>
                    </div>
                    <div class="quantity">
                        <div class="custom">
                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon_minus-06"></i></button>
                            <input type="text" name="qty" id="sst" maxlength="12" value="01" title="Quantity:" class="input-text qty">
                            <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="icon_plus"></i></button>
                        </div>
                        <a class="add_cart_btn" href="#">add to cart</a>
                    </div>
                    <div class="shareing_icon">
                        <h5>share :</h5>
                        <ul>
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_pinterest"></i></a></li>
                            <li><a href="#"><i class="social_instagram"></i></a></li>
                            <li><a href="#"><i class="social_youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Product Details Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
    <div class="container">
        <nav class="tab_menu">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Product Description</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews (1)</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Tags</a>
                <a class="nav-item nav-link" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-info" aria-selected="false">additional information</a>
                <a class="nav-item nav-link" id="nav-gur-tab" data-toggle="tab" href="#nav-gur" role="tab" aria-controls="nav-gur" aria-selected="false">gurantees</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  Emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <h4>Rocky Ahmed</h4>
                <ul>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                </ul>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  Emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div>
            <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  Emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div>
            <div class="tab-pane fade" id="nav-gur" role="tabpanel" aria-labelledby="nav-gur-tab">
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  Emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
            </div>
        </div>
    </div>
</section>
<!--================End Product Details Area =================-->

<!--================End Related Product Area =================-->
<section class="related_product_area">
    <div class="container">
        <div class="related_product_inner">
            <h2 class="single_c_title">Related Product</h2>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="{{asset('img/product/related-product/r-product-1.jpg')}}" alt="">
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Run Tracksuit</h4>
                            <h5>$85.50</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="{{asset('img/product/related-product/r-product-2.jpg')}}" alt="">
                            <h5 class="new">New</h5>
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Nike Men Trouser</h4>
                            <h5><del>$130.50</del>  $110</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="{{asset('img/product/related-product/r-product-3.jpg')}}" alt="">
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Nike Track Pants</h4>
                            <h5>$250.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="{{asset('img/product/related-product/r-product-4.jpg')}}" alt="">
                            <h5 class="sale">Sale</h5>
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Therma Pants</h4>
                            <h5>$45.50</h5>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example" class="pagination_area">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item next"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!--================End Related Product Area =================-->

@endsection

</body>
</html>