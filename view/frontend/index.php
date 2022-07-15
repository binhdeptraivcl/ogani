<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bình | đẹp trai vcl</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/TH_1/view/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/TH_1/view/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/TH_1/view/frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/TH_1/view/frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/TH_1/view/frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/TH_1/view/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/TH_1/view/frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/TH_1/view/frontend/css/style.css" type="text/css">
    
</head>

<body>
<?php



?>
    
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>

    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <?php 
    // print_r($_SESSION['id']);

    include "header.php" 
    ?>
    <!-- Header Section End -->

    
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+0868091672</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="/TH_1/view/frontend/img/hero/banner.jpg">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="<?=URL?>shop_grid/1" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/TH_1/view/frontend/img/categories/cat-1.jpg">
                            <h5><a href="#">Fresh Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/TH_1/view/frontend/img/categories/cat-2.jpg">
                            <h5><a href="#">Dried Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/TH_1/view/frontend/img/categories/cat-3.jpg">
                            <h5><a href="<?=cate?>Vegetables">Vegetables</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/TH_1/view/frontend/img/categories/cat-4.jpg">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/TH_1/view/frontend/img/categories/cat-5.jpg">
                            <h5><a href="<?=cate?>Meat">Meat</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <nav class="header__menu">
                    <div class="featured__controls">
                        <ul>
                            <li data-filter="*"><a style = "color = red;" href="<?=cate?>all">All</a></li>
                            <li data-filter=".oranges"><a href="<?=cate?>Fruit">Fruit</a>
                                <ul  class="header__menu__dropdown">
                                        <!-- <li><a href="<?=URL?>shop_details">Shop Details</a></li> -->
                                        <li><a href="<?=cate?>Fresh">Fresh</a></li>
                                        <li><a href="<?=cate?>Dried">Dried</a></li>
                                </ul>
                            </li>
                                
                            <li data-filter=".fresh-meat"><a href="<?=cate?>Meat">Fresh Meat</a>
                                <ul  class="header__menu__dropdown">
                                        <!-- <li><a href="<?=URL?>shop_details">Shop Details</a></li> -->
                                        <li><a href="<?=cate?>Beef">Beef</a></li>
                                        <li><a href="<?=cate?>Chicken">Chicken</a></li>
                                </ul>
                            </li>
                            <li data-filter=".vegetables"><a href="<?=cate?>Vegetables">Vegetables</a>
                                <ul  class="header__menu__dropdown">
                                        <!-- <li><a href="<?=URL?>shop_details">Shop Details</a></li> -->
                                        <li><a href="<?=cate?>Vegetables">Vegetables</a></li>
                                        <li><a href="<?=cate?>Mushroom">Mushroom</a></li>
                                </ul>
                            </li>
                            <!-- <li data-filter=".vegetables">Vegetables</li> -->
                            <li data-filter=".fastfood"><a style = "color = red;" href="<?=cate?>Fastfood">Fastfood</a>
                                <ul  class="header__menu__dropdown">
                                        <!-- <li><a href="<?=URL?>shop_details">Shop Details</a></li> -->
                                        <li><a href="<?=cate?>Noodles">Noodles</a></li>
                                        <li><a href="<?=cate?>Pizza">Pizza</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                </div>
            </div>
            <div class="row featured__filter">
            <?php 
                foreach($data['products'] as $value) :?> 
                            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?=folder?><?=$value['image']?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="<?=URL?>shop_details/<?=$value['id']?>"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="<?=URL?>shop_details/<?=$value['id']?>"><?= $value['product_name']?></a></h6>
                            <h5><?= number_format(($value['price'] ), 0, '', ',') . " VND" ?></h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                
                
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="/TH_1/view/frontend/img/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="/TH_1/view/frontend/img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($data['productss'] as $value) :?> 
                                <a href="<?=URL?>shop_details/<?=$value['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?=folder?><?=$value['image']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?=$value['product_name']?></h6>
                                        <span><?= number_format(($value['price'] ), 0, '', ',') . " VND" ?></span>
                                    </div>
                                </a>
                                <?php endforeach; ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($data['productss'] as $value) :?> 
                                <a href="<?=URL?>shop_details/<?=$value['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?=folder?><?=$value['image']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?=$value['product_name']?></h6>
                                        <span><?= number_format(($value['price'] ), 0, '', ',') . " VND" ?></span>
                                    </div>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>BestSeller Products</h4>
                        <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <?php foreach($data['seller'] as $value) :?> 
                                <a href="<?=URL?>shop_details/<?=$value['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?=folder?><?=$value['image']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?=$value['product_name']?></h6>
                                        <span><?= number_format(($value['price'] ), 0, '', ',') . " VND" ?></span>
                                    </div>
                                </a>
                                <?php endforeach; ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($data['seller'] as $value) :?> 
                                <a href="<?=URL?>shop_details/<?=$value['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?=folder?><?=$value['image']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?=$value['product_name']?></h6>
                                        <span><?= number_format(($value['price'] ), 0, '', ',') . " VND" ?></span>
                                    </div>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sale Products</h4>
                        <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <?php foreach($data['sale'] as $value) :?> 
                                <a href="<?=URL?>shop_details/<?=$value['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?=folder?><?=$value['image']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?=$value['product_name']?></h6>
                                        <span><?= number_format(($value['price'] ), 0, '', ',') . " VND" ?></span>
                                    </div>
                                </a>
                                <?php endforeach; ?>
                            </div>
                            <div class="latest-prdouct__slider__item">
                            <?php foreach($data['sale'] as $value) :?> 
                                <a href="<?=URL?>shop_details/<?=$value['id']?>" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="<?=folder?><?=$value['image']?>" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?=$value['product_name']?></h6>
                                        <span><?= number_format(($value['price'] ), 0, '', ',') . " VND" ?></span>
                                    </div>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="/TH_1/view/frontend/img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="/TH_1/view/frontend/img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="/TH_1/view/frontend/img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="/TH_1/"><img src="/TH_1/view/frontend/img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: thanhbinhntn2018@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="fb.com/b6112002/TH_/TH_1/"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                                template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="/TH_1/view/frontend/img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="/TH_1/view/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="/TH_1/view/frontend/js/bootstrap.min.js"></script>
    <script src="/TH_1/view/frontend/js/jquery.nice-select.min.js"></script>
    <script src="/TH_1/view/frontend/js/jquery-ui.min.js"></script>
    <script src="/TH_1/view/frontend/js/jquery.slicknav.js"></script>
    <script src="/TH_1/view/frontend/js/mixitup.min.js"></script>
    <script src="/TH_1/view/frontend/js/owl.carousel.min.js"></script>
    <script src="/TH_1/view/frontend/js/main.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-Hqe3s+yLpqaBbXM6VA0cnj/T56ii5YjNrMT9v+us11Q81L0wzUG0jEMNECtugqNu2Uq5MSttCg0p4KK0kCPVaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->


</body>

</html>