<title>Bình | đẹp trai vcl</title>
<header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <!-- <li><i class="fa fa-envelope"></i> <?php print_r($_SESSION['user']) ?></li> -->
                                <?php
                                    if(isset($_SESSION['user']))
                                    {
                                        $name = $_SESSION['user'];
                                        echo "<li><i class = 'fa fa-envelope'> $name</i></li>";
                                    }else{
                                        echo "<li><i class = 'fa fa-envelope'>User name</i></li>";
                                    }
                                    
                                ?>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://www.facebook.com/b6112002/"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="/TH_1/view/frontend//TH_1/view/frontend/img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <?php
                                $url = url;
                                if(isset($_SESSION['user']))
                                {
                                    echo "<a href = '$url/logout'><i class = ''fa fa-user> </i> Logout </a>";
                                 
                                }else{
                                    echo "<a href = '$url/login'><i class = ''fa fa-user> </i> Login </a>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="/TH_1/"><img src="/TH_1/view/frontend/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="/TH_1/">Home</a></li>
                            <li><a href="<?=URL?>shop_grid/1">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <!-- <li><a href="<?=URL?>shop_details">Shop Details</a></li> -->
                                    <li><a href="<?=URL?>cart">Shoping Cart</a></li>
                                    <li><a href="<?=URL?>checkout">Check Out</a></li>
                                    <li><a href="<?=URL?>blog_details">Blog Details</a></li>
                                </ul>
                            </li>
                            <?php
                                if(isset($_SESSION['user'])){
                                    if($_SESSION['user'] == "binhdeptraivcl123")
                                    {
                                        echo "<li><a href='http://localhost/TH_1/index.php/backend/'>Admin</a></li>";
                                    }else{
                                        echo "<li><a href='/TH_1/index.php/frontend/blog'>Blog</a></li>";
                                    }
                                }else{
                                    echo "<li><a href='/TH_1/index.php/frontend/blog'>Blog</a></li>";
                                }
                            ?>
                            <!-- <li><a href="<?=URL?>blog">Admin</a></li> -->
                            <li><a href="<?=URL?>contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="<?=URL?>cart"><i class="fa fa-shopping-bag"></i> <span><?php 
                            if(!isset($_SESSION['amount']))
                            {echo 0;
                            }else{
                                echo $_SESSION['number_of_item'];
                                }
                            ?></span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>