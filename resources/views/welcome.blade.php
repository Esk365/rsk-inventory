<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Flyplane Template">
    <meta name="keywords" content="Flyplane, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RSK Inventory</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="user/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="user/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="user/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="user/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="user/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="user/css/slick.css" type="text/css">
    <link rel="stylesheet" href="user/css/datepicker.min.css" type="text/css">
    <link rel="stylesheet" href="user/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="user/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="user/css/style.css" type="text/css">

</head>

<body>
    
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="offcanvas-menu-overlay"></div>

    <header class="header">
        <div class="container">
            <div class="header__options">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="/"><img src="{{ asset('user/img/logo.jpg') }}" alt></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="/">Home</a></li>
                                @auth
                                    @if (Auth::User()->role == 'user')
                                        <li><a href="/user/myflights">My Flights</a></li>
                                    @endif
                                    @if (Auth::User()->role == 'admin')
                                        <li><a href="/admin/home">Dashboard</a></li>
                                    @endif
                                @endauth
                                @guest <li><a href="/signin">Sign In</a></li> @endguest
                                @auth <li><a href="/signout">Sign Out</a></li> @endauth
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>


   
    <section class="hero spad set-bg" data-setbg="user/img/main.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">

                        <h2>RSK Inventory </h2>
                        <p>Streamline Your Inventory, Simplify Your Workflow.</p>
                        <a href="#" class="primary-btn">Discover Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


  

    <section class="hotPlaces spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>Special Offers</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hotPlaces__top__text">
                        <p>
                         We are committed to provide exceptional services and products to our users                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="places__item hotPlaces__item">
                        <div class="places__item__pic">
                            <img src="user/img/furniture.jpg" alt>
                        </div>
                        <div class="places__item__text">
                            <h4><a href="#">Get Your Dream Furniture For Low Price</a></h4>
                            <p>Damro</p>
                            <div class="price">Rs.80 000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="places__item hotPlaces__item">
                        <div class="places__item__pic">
                            <img src="user/img/refreshment.png" alt>
                        </div>
                        <div class="places__item__text">
                            <h4><a href="#">Discover Refreshment Like Never Before,
                            Buy One, Get One Free!
                            </a></h4>
                            <p> Strawberry Mojito</p>
                            <div class="price">Rs.750</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="places__item hotPlaces__item">
                        <div class="places__item__pic">
                            <img src="user/img/cloths.jpg" alt>
                        </div>
                        <div class="places__item__text">
                            <h4><a href="#">Grab Your Favourite from Latest Collections </a></h4>
                            <p> HUFF & DEE</p>
                            <div class="price">Rs.2800</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery spad set-bg" data-setbg="user/img/gallery-bg.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="gallery__title">
                        <div class="section-title center_title">
                            <h2>Inventory Gallery</h2>
                        </div>
                        <p>Imagine a world where every item you need is perfectly in place, 
                           effortlessly organized, and readily available at your fingertips.
                           That's the magic of RSK inventory system
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery__pic">
                        <div class="gallery__pic__slider">
                            <div class="gallery__pic__item set-bg" data-setbg="user/img/Gp1.jpg">
                                <h1>Table</h1>
                            </div>
                            <div class="gallery__pic__item set-bg" data-setbg="user/img/Gp2.jpg">
                                <h1>Chair</h1>
                            </div>
                            <div class="gallery__pic__item set-bg" data-setbg="user/img/Gp3.jpg">
                                <h1>T-shirts</h1>
                            </div>
                            <div class="gallery__pic__item set-bg" data-setbg="user/img/Gp4.jpg">
                                <h1>Furniture</h1>
                            </div>
                            <div class="gallery__pic__item set-bg" data-setbg="user/img/Gp5.png">
                                <h1>Denim</h1>
                            </div>
                            <div class="gallery__pic__item set-bg" data-setbg="user/img/Gp6.jpg">
                                <h1>Towels</h1>
                            </div>
                            <div class="gallery__pic__item set-bg" data-setbg="user/img/Gp7.jpg">
                                <h1>Drinks</h1>
                            </div>
                            <div class="gallery__pic__item set-bg" data-setbg="user/img/Gp8.jpeg">
                                <h1>Mojito</h1>
                            </div>
                            <div class="gallery__pic__item set-bg" data-setbg="user/img/Gp9.jpg">
                                <h1>Vegitable</h1>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10 col-md-10">
                                <div class="gallery__controls">
                                    <div class="gallery__controls__item">
                                        <h5>Table</h5>
                                    </div>
                                    <div class="gallery__controls__item">
                                        <h5>Chair</h5>
                                    </div>
                                    <div class="gallery__controls__item">
                                        <h5>T-shirts</h5>
                                    </div>
                                    <div class="gallery__controls__item">
                                        <h5>Furniture</h5>
                                    </div>
                                    <div class="gallery__controls__item">
                                        <h5>Denim</h5>
                                    </div>
                                    <div class="gallery__controls__item">
                                        <h5>Towels</h5>
                                    </div>
                                    <div class="gallery__controls__item">
                                        <h5>Drinks</h5>
                                    </div>
                                    <div class="gallery__controls__item">
                                        <h5>Mojito</h5>
                                    </div>
                                    <div class="gallery__controls__item">
                                        <h5>Vegitable</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="latest__left">
                        <div class="section-title">
                            <h2>News Latest</h2>
                        </div>
                        <div class="latest__recent">
                            <a href="#" class="latest__recent__item">
                                <div class="latest__recent__item__pic">
                                    <img src="user/img/news1.jpg" alt>
                                </div>
                                <div class="latest__recent__item__text">
                                    <ul>
                                        <li>New Luxury Furniture</li>
                                        <li>By Admin</li>
                                    </ul>
                                    <h5>Decorate Your Dream House with our furniture ...</h5>
                                </div>
                            </a>
                            <a href="#" class="latest__recent__item">
                                <div class="latest__recent__item__pic">
                                    <img src="user/img/news2.jpg" alt>
                                </div>
                                <div class="latest__recent__item__text">
                                    <ul>
                                        <li>Denim Fashion Trends for the Fall Season</li>
                                        <li>By Admin</li>
                                    </ul>
                                    <h5>The latest fall fashion trends include a variety of denim products, from classic jeans to trendy jackets...</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="latest__content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="user/img/news3.jpg" alt>
                                    </div>
                                    <div class="blog__item__text">
                                        <div class="blog__date">July 21, 2024</div>
                                        <ul>
                                            <li>New Line of Luxury Towels Now Available</li>
                                            <li>By Admin</li>
                                        </ul>
                                        <h5><a href="#">A renowned home goods brand has unveiled a new line of luxury towels.
                                            These are exceptionally soft, absorbent, and durable, making them a premium choice for consumers looking to upgrade their bathroom essentials.
                                        </a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="user/img/news4.jpg" alt>
                                    </div>
                                    <div class="blog__item__text">
                                        <div class="blog__date">July 21, 2024</div>
                                        <ul>
                                            <li>Organic Vegetable Packs Now in Stock</li>
                                            <li>By Admin</li>
                                        </ul>
                                        <h5><a href="#">We are now offering organic vegetable packs sourced from local farms. 
                                            These packs include a variety of fresh, 
                                            seasonal vegetables that are free from pesticides and chemical fertilizers, 
                                            catering to health-conscious customers who prefer organic produce.</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer spad">
        <div class="container">
            <div class="row d-lfex justify-content-center">
                <div class="col-lg-7">
                    <div class="footer__text">
                        <div class="footer__about">
                            <div class="footer__logo">
                                <a href="#"><img src="user/img/footer-logo.jpg" alt></a>
                            </div>
                            <p> Discover a world of unparalleled quality and selection with our inventory.
                            Trust us to provide the best for your needs,
                            with a commitment to value and satisfaction at every turn.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

  
    <script src="user/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="user/js/jquery.barfiller.js"></script>
    <script src="user/js/jquery.magnific-popup.min.js"></script>
    <script src="user/js/jquery.nice-select.min.js"></script>
    <script src="user/js/slick.min.js"></script>
    <script src="user/js/owl.carousel.min.js"></script>
    <script src="user/js/datepicker.min.js"></script>
    <script src="user/js/main.js"></script>
  
</body>

</html>
