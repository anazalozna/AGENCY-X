<?php
//    ini_set("display_errors",1);
//    error_reporting(E_ALL);
    require_once('includes/header.html');
?>
    <section class="page_content">
        <h2 class="hide">Main Page Container</h2>
        <section class="welcome_block">
            <h2 class="hide">Welcome Content</h2>
            <div class="wrapper_small">
                <h2 class="title_h2">Welcome To Our Bakery</h2>
                <p>We are very proud of what we make here. Our goal is to make our customers a little bit happier with delicious menu we have.</p>
                <p>Everyone is invited!</p>
                <a class="btn_more ajax" href="#">More About Us</a>
            </div>
        </section>
        <section class="promo_block">
            <h2 class="hide">Promo Content</h2>
            <div class="wrapper promo_flex">
                <div class="flex_item">
                    <div class="promo_img">
                        <img src="img/promo_1.jpg" alt="Promo Taste" title="Promo Taste">
                    </div>
                    <h2 class="title_h2">Best Taste</h2>
                    <p>There is absolutely no way to find our flavours elsewhere. We are unique!</p>
                    <a class="btn_more" href="#">See More</a>
                </div>
                <div class="flex_item">
                    <div class="promo_img">
                        <img src="img/promo_2.jpg" alt="Promo Price" title="Promo Price">
                    </div>
                    <h2 class="title_h2">Nice Prices</h2>
                    <p>You will be surprise about how many things you can afford here.</p>
                    <a class="btn_more" href="#">See More</a>
                </div>
                <div class="flex_item">
                    <div class="promo_img">
                        <img src="img/promo_3.jpg" alt="Promo Place" title="Promo Place">
                    </div>
                    <h2 class="title_h2">Comfy Place</h2>
                    <p>After just having a look at shapes and forms of our food, you will want to stay at us for much longer.</p>
                    <a class="btn_more" href="#">See More</a>
                </div>
            </div>
        </section>
        <section class="feedback_block">
            <h2 class="hide">Testimonials Content</h2>
            <div class="slider_main">
                <div class="wrapper">
                    <h2 class="title_h2">Happy Customers</h2>
                    <div class="all_slides">
                        <div class="slide">
                            <div class="slide_content wrapper_small">
                                <h3>The staff is pretty polite. The service is fast as never.</h3>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide_content wrapper_small">
                                <h3>I really liked the croissants with a strawberry jam. It reminds me of my childhood.</h3>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="slide_content wrapper_small">
                                <h3>I will definitely come here again. All assortment of food is fresh and truly Delicious.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="slider_arrow" id="prev_slide"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="slider_arrow" id="next_slide"><i class="fa fa-chevron-right"></i></a>
            </div>
        </section>
    </section>
<?php require_once('includes/footer.html'); ?>

