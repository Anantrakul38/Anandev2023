<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <?php include('condb/condb.php'); ?>
    <?php include('head.php'); ?>
</head>

<body>
    <!-- Select menu -->
    <div class="menu_select">
        <div class="menu_select_wrapper">
            <i class="fa-solid fa-plus"></i>
        </div>
        <ul class="menu_select_items">
            <li class="menu_select_item">
                <!-- Dark-light mode -->
                <div class="dark_light_toggle">
                    <div class="dark_light_toggle_indicator">
                        <div class="dark_light_toggle-container">
                            <i class="dark_light_icon fa-solid fa-sun"></i>
                        </div>
                    </div>
                </div>
            </li>
            <li class="menu_select_item">
                <i class="fa-solid fa-location-dot"></i>
            </li>
            <li class="menu_select_item">
                <i class="fa-brands fa-line"></i>
            </li>
        </ul>
    </div>

    <!-- Button back to Top -->
    <div class="back_top_page">
        <a class="top_p" href="#">
            <i class="b_top_p fa-solid fa-angle-up"></i>
        </a>
    </div>

    <header id="Header" class="header-l">
        <!-- top-bar -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <ul class="contact-detail">
                            <li>
                                <a href="#"><i class="fa-brands fa-facebook"></i>Facebook</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-line"></i>Line</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-solid fa-square-envelope"></i>E-mail</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-solid fa-phone"></i>Tel.</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- center-bar -->
        <div id="fixed_bar" class="">
            <div id="header_clear01" class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-logo">
                        <a class="nav-brand-logo" href="#"><img src="img/nisdt_logo304.png" alt="logo"></a>
                    </div>
                    <div class="tool-list">
                        <form action="">
                            <div class="search-tool">
                                <input id="input_s01" type="text" class="search_bar-input" placeholder="Search . . . . .">
                                <div class="search_btn">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- bottom-bar -->
            <div class="bottom-bar">
                <div class="container">
                    <ul class="nav-ul">
                        <li class="nav-li">
                            <a class="nav-active" href="#">Home</a>
                        </li>
                        <li class="nav-li">
                            <a class="nav-active" href="">About Us</a>
                        </li>
                        <li class="nav-li">
                            <a class="nav-active" href="">Product</a>
                        </li>
                        <li class="nav-li">
                            <a class="nav-active" href="">CSR</a>
                        </li>
                        <li class="nav-li">
                            <a class="nav-active" href="">Careers</a>
                        </li>
                        <li class="nav-li">
                            <a class="nav-active" href="">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- smartphone header -->
            <div id="fixed_bar" class="">
                <div id="header_clear02" class="navbar navbar-default">
                    <div class="navbar-logo">
                        <a class="nav-brand-logo" href="#"><img src="img/nisdt_logo304.png" alt="logo"></a>
                    </div>
                </div>
            </div>
            <div class="sp_toggle_menu">
                <div class="sp_menu">
                    <div class="container">
                        <div class="sp_humburger"></div>
                    </div>
                </div>
                <div class="sp_bottom_header">
                    <div class="sp_bottom-bar">
                        <div class="sp_container">

                            <div class="tool-list">
                                <form action="">
                                    <div class="search-tool">
                                        <input id="input_s02" type="text" class="search_bar-input" placeholder="Search . . . . .">
                                        <div class="search_btn">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <ul class="nav-ul">
                                <li class="nav-li">
                                    <a class="nav-active" href="#">Home</a>
                                </li>
                                <li class="nav-li">
                                    <a class="nav-active" href="">About Us</a>
                                </li>
                                <li class="nav-li">
                                    <a class="nav-active" href="">Product</a>
                                </li>
                                <li class="nav-li">
                                    <a class="nav-active" href="">CSR</a>
                                </li>
                                <li class="nav-li">
                                    <a class="nav-active" href="">Careers</a>
                                </li>
                                <li class="nav-li">
                                    <a class="nav-active" href="">Contact Us</a>
                                </li>
                            </ul>

                            <ul class="contact-detail">
                                <li>
                                    <a class="link_social" style="--color: #3b5998;" href="#">
                                        <i class="link_icon fa-brands fa-facebook"></i>
                                        <span class="link_title">Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="link_social" style="--color: #06c755;" href="#">
                                        <i class="link_icon fa-brands fa-line"></i>
                                        <span class="link_title">Line</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="link_social" style="--color: #dc4a38;" href="#">
                                        <i class="link_icon fa-solid fa-square-envelope"></i>
                                        <span class="link_title">E-mail</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="link_social" style="--color: #00aff0;" href="#">
                                        <i class="link_icon fa-solid fa-phone"></i>
                                        <span class="link_title">Tel.</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="main_l">

        <div class="carousel_l">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="img/header4.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/header4.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/header4.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/header4.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/header4.jpg" alt="">
                </div>
            </div>
        </div>


    </main>



    <?php include('footer.php') ?>
    <script>
        $('.owl-carousel').owlCarousel({
            stagePadding: 20, 
            loop: true,
            margin: 1,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 8000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
</body>

</html>