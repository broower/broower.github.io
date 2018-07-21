<?php
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	
	session_start();
	if (isset($_SESSION['id'])) {
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Регистрация | Broower Shop - магазин бескаркасной мебели</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/core-style.css">


    <!--===============================================================================================-->
</head>

<body class="animsition">

    <!-- Header -->
    <header class="header1">
        <!-- Header desktop -->
        <div class="container-menu-header">
            <div class="topbar">
                <div class="topbar-social">
                    <a href="https://vk.com/broower" class="topbar-social-item fa fa-vk"></a>
                    <a href="https://www.instagram.com/broower_shop/" class="topbar-social-item fa fa-instagram"></a>
                    <a href="https://www.facebook.com/groups/252337545513414" class="topbar-social-item fa fa-facebook"></a>
                    <a href="https://www.youtube.com/channel/UCADiI7GTDkHk5chTSTwfgvQ" class="topbar-social-item fa fa-youtube-play"></a>
                </div>

                <span class="topbar-child1">
					Аренда и продажа бескаркасной мебели в Республике Беларусь
				</span>
            </div>

            <div class="wrap_header">
                <!-- Logo -->
                <a href="index.html" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

                <!-- Menu -->
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="index.html">Главная</a>
                            </li>

                            <li>
                                <a href="product.html">Каталог</a>
                            </li>

                            <li>
                                <a href="cart.html">Корзина</a>
                            </li>

                            <li>
                                <a href="lease.html">Аренда</a>
                            </li>

                            <li>
                                <a href="contact.html">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Header Icon -->
                <div class="header-icons" style="display:none;">
                    <div class="header-wrapicon2 m-r-13">
                        <img src="images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown">
                            <ul class="header-cart-wrapitem">
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img-without-cross">
                                        <img src="images/item-cart-01.jpg" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <h6>
                                            thecriser
                                        </h6>

                                        <span class="header-cart-item-info">
											Захаренко Максим Вячеславович
										</span>
                                    </div>
                                </li>
                            </ul>

                            <div class="block2-txt p-t-10">
                                <a href="#" class="block2-name dis-block s-text3 p-b-5">
                            Редактировать профиль
				        </a>
                            </div>
                            <div class="header-cart-buttons  p-t-10">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Выйти
									</a>
                                </div>
                                <div class="header-cart-wrapbtn p-t-10">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Войти
									</a>
                                </div>
                                <div class="header-cart-wrapbtn p-t-10">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Регистрация
									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="linedivide1"></span>

                    <div class="header-wrapicon2" style="display:none;">
                        <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti">0</span>

                        <!-- Header cart -->
                        <div class="header-cart header-dropdown">
                            <ul class="header-cart-wrapitem">
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="images/item-cart-01.jpg" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
											[FULL] White Shirt With Pleat Detail Back
										</a>

                                        <span class="header-cart-item-info">
											1 x $19.00
										</span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="images/item-cart-02.jpg" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

                                        <span class="header-cart-item-info">
											1 x $39.00
										</span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="images/item-cart-03.jpg" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

                                        <span class="header-cart-item-info">
											1 x $17.00
										</span>
                                    </div>
                                </li>
                            </ul>

                            <div class="block2-txt p-t-10">
                                <a href="cart.html" class="block2-name dis-block s-text3 p-b-5">
								Просмотреть всю корзину
				        </a>
                            </div>

                            <div class="block2-txt p-b-20">
                                Общая стоимость: $75.00
                            </div>

                            <div class="header-cart-buttons">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Оформить заказ
									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap_header_mobile">
            <!-- Logo moblie -->
            <a href="index.html" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

            <!-- Button show menu -->
            <div class="btn-show-menu">
                <!-- Header Icon mobile -->
                <div class="header-icons-mobile">
                    <div class="header-wrapicon2">
                        <img src="images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">

                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown">
                            <ul class="header-cart-wrapitem">
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img-without-cross">
                                        <img src="images/item-cart-01.jpg" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <h6>
                                            thecriser
                                        </h6>

                                        <span class="header-cart-item-info">
											Захаренко Максим Вячеславович
										</span>
                                    </div>
                                </li>
                            </ul>

                            <div class="block2-txt p-t-10">
                                <a href="#" class="block2-name dis-block s-text3 p-b-5">
                            Редактировать профиль
				        </a>
                            </div>
                            <div class="header-cart-buttons  p-t-10">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Выйти
									</a>
                                </div>
                                <div class="header-cart-wrapbtn p-t-10">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Войти
									</a>
                                </div>
                                <div class="header-cart-wrapbtn p-t-10">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Регистрация
									</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <span class="linedivide2"></span>

                    <div class="header-wrapicon2">
                        <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti">0</span>

                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown">
                            <ul class="header-cart-wrapitem">
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="images/item-cart-01.jpg" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
											[MOBILE] White Shirt With Pleat Detail Back
										</a>

                                        <span class="header-cart-item-info">
											1 x $19.00
										</span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="images/item-cart-02.jpg" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

                                        <span class="header-cart-item-info">
											1 x $39.00
										</span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src="images/item-cart-03.jpg" alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

                                        <span class="header-cart-item-info">
											1 x $17.00
										</span>
                                    </div>
                                </li>
                            </ul>

                            <div class="block2-txt p-t-10">
                                <a href="cart.html" class="block2-name dis-block s-text3 p-b-5">
								Просмотреть всю корзину
				        </a>
                            </div>

                            <div class="block2-txt p-b-20">
                                Общая стоимость: $75.00
                            </div>

                            <div class="header-cart-buttons">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Оформить заказ
									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
						<span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="wrap-side-menu">
            <nav class="side-menu">
                <ul class="main-menu">
                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <span class="topbar-child1">
							Аренда и продажа бескаркасной мебели в Республике Беларусь
						</span>
                    </li>


                    <li class="item-topbar-mobile p-l-10">
                        <div class="topbar-social-mobile">
                            <a href="https://vk.com/broower" class="topbar-social-item fa fa-vk"></a>
                            <a href="https://www.instagram.com/broower_shop/" class="topbar-social-item fa fa-instagram"></a>
                            <a href="https://www.facebook.com/groups/252337545513414" class="topbar-social-item fa fa-facebook"></a>
                            <a href="https://www.youtube.com/channel/UCADiI7GTDkHk5chTSTwfgvQ" class="topbar-social-item fa fa-youtube-play"></a>
                        </div>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="index.html">Главная</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="product.html">Каталог</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="cart.html">Корзина</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="lease.html">Аренда</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="contact.html">Контакты</a>
                    </li>

                </ul>
            </nav>
        </div>
    </header>

    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix" style="margin-top: 0px!important; margin-bottom: 20px;">
					<link rel="stylesheet" type="text/css" href="css/style.css"></link>
					<?php
					require_once("php/model/MyDatabase.php");
					include("php/language/ru.php");	
					include("php/view/registration_form.php");
					?>
 
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">

                </div>

            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg6 p-t-45 p-b-20 p-l-45 p-r-45">
        <div class="flex-w">
            <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    Обратная связь
                </h4>

                <div>
                    <p class="s-text7 w-size27">
                        Появились вопросы? Сообщите нам по телефону +375 (33) 66 88 550 или свяжитесь с нами через почтовый адрес broowershop@gmail.com
                    </p>

                    <div class="flex-m p-t-30">
                        <a href="https://www.facebook.com/groups/252337545513414" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                        <a href="https://www.instagram.com/broower_shop/" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                        <a href="https://vk.com/broower" class="fs-18 color1 p-r-20 fa fa-vk"></a>
                        <a href="https://www.youtube.com/channel/UCADiI7GTDkHk5chTSTwfgvQ" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                    </div>
                </div>
            </div>

            <!--
			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Men
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Women
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Dresses
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sunglasses
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Links
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Search
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							About Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Contact Us
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Help
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Track Order
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Returns
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Shipping
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							FAQs
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Newsletter
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
-->
        </div>

        <div class="t-center p-l-15 p-r-15">
            <!--
			<a href="#">
				<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
			</a>
-->

            <div class="t-center s-text8 p-t-20">
                Copyright © 2018 All rights reserved.
            </div>
        </div>
    </footer>


    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
    </div>

    <!-- Container Selection -->
    <div id="dropDownSelect1"></div>
    <div id="dropDownSelect2"></div>



    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });

        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect2')
        });

    </script>
    <!--===============================================================================================-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script src="js/map-custom.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>
