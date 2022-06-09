<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Geulysskin</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link
      href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap"
      rel="stylesheet"
    />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />

    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
  </head>

  <body>
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.php">
              <img class="skincare" src="images/logo.jpeg" alt="" /><span>
                GEULYSSKIN
              </span>
            </a>

            <div class="navbar-collapse" id="">
              <div class="container">
                <div class="mr-auto flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav justify-content-between">
                    <div class="d-none d-lg-flex">
                      <li class="nav-item">
                        <a class="nav-link" href="fruit.html">
                          Customer Number : 02122234567</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="service.html">
                          geulysskin@gmail.com
                        </a>
                      </li>
                    </div>
                    <div class="d-none d-lg-flex">
                      <li class="nav-item">
                        <a class="nav-link" href="FrontEnd/login.php">
                          Sign In/Sign Up
                        </a>
                      </li>
                      <form class="form-inline my-2 ml-5 mb-3 mb-lg-0">
                        <button
                          class="btn my-2 my-sm-0 nav_search-btn"
                          type="submit"
                        ></button>
                      </form>
                    </div>
                  </ul>
                </div>
              </div>

              <div class="custom_menu-btn">
                <button onclick="openNav()"></button>
              </div>
              <div id="myNav" class="overlay">
                <a
                  href="javascript:void(0)"
                  class="closebtn"
                  onclick="closeNav()"
                  >&times;</a
                >
                <div class="overlay-content">
                  <a href="index.php">HOME</a>
                  <a href="FrontEnd/product.php">PRODUCTS</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
      <!-- slider section -->
      <section class="slider_section position-relative">
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="slider_item-box">
                <div class="slider_item-container">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="offset-md-2 col-md-4">
                        <div class="slider_item-detail">
                          <div>
                            <h2 class="slider_heading">
                              70% OFF <br />
                              First order
                            </h2>
                            <p>
                              Pretty things inside!
                            </p>
                            <div class="d-flex">
                              <a href="" class="slider_btn"> Order Now </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="hero_img-box">
                          <img src="images/skin.jpeg" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="slider_item-box">
                <div class="slider_item-container">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="offset-md-2 col-md-4">
                        <div class="slider_item-detail">
                          <div>
                            <h2 class="slider_heading">
                              70% OFF <br />
                              First order
                            </h2>
                            <p>
                              Kulit glowing maksimal bersama Geulysskin
                            </p>
                            <div class="d-flex">
                              <a href="" class="slider_btn"> Order Now </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="hero_img-box">
                          <!-- ini gambar kamu -->
                          <img src="images/skin.jpeg" alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="slider_item-box">
                <div class="slider_item-container">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="offset-md-2 col-md-4">
                        <div class="slider_item-detail">
                          <div>
                            <h2 class="slider_heading">
                              70% OFF <br />
                              First order
                            </h2>
                            <p>
                              Treat your skin right!
                            </p>
                            <div class="d-flex">
                              <a href="" class="slider_btn"> Order Now </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="hero_img-box">
                          <!-- ini gambar kamu -->
                          <img src="images/skin.jpeg" alt="" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleControls"
            role="button"
            data-slide="prev"
          >
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleControls"
            role="button"
            data-slide="next"
          >
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>

      <!-- end slider section -->
    </div>

    <!-- detail section -->
    <section class="detail_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3">
            <div class="detail_img-box">
              <img src="images/detail.png" alt="" class="w-100" />
            </div>
          </div>
          <div class="col-lg-7">
            <div class="detail_container">
              <div class="detail-box d-box-1">
                <a href="">
                  <div class="detail-content">
                    <img src="images/lokal-1.jpeg" alt="" />
                    <h5><a href="FrontEnd/localbrand.php">Local Brand</a></h5>
                  </div>
                </a>
              </div>
              <div class="detail-box d-box-2">
                <a href="">
                  <div class="detail-content">
                    <img src="images/facial wash-2.jpeg" alt="" />
                    <h5><a href="FrontEnd/originbrand.php">Origin Brand</a></h5>
                  </div>
                </a>
              </div>
              <div class="detail-box d-box-3">
                <a href="">
                  <div class="detail-content">
                    <img src="images/sale.jpeg" alt="" />
                     <h5><a href="FrontEnd/localbrand.php">Sale 70%</a></h5>
                  </div>
                </a>
              </div>
              <div class="detail-box d-box-4">
                <a href="">
                  <div class="detail-content">
                    <img src="images/best-1.jpeg" alt="" />
                    <h5><a href="FrontEnd/originbrand.php">Best Seller</a></h5>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end detail section -->

    <!-- products section -->
    <section class="products_section">
      <div class="heading_container">
        <h2>All Your Beauty Here</h2>
        <p>Featured Product Just Arrived</p>
      </div>
      <div class="container layout_padding">
        <div class="product_container">
          <a href="">
            <div class="product_box">
              <div class="product_img-box">
                <img src="images/avoskin.png" alt="" />
                <span> Shop </span>
              </div>
              <div class="product_detail-box">
                <span> Rp. 126000 </span>
                <p>Avoskin</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="product_box">
              <div class="product_img-box">
                <img src="images/skin-3.jpeg" alt="" />
                <span> Shop </span>
              </div>
              <div class="product_detail-box">
                <span> Rp. 125000 </span>
                <p>Cosrx</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="product_box">
              <div class="product_img-box">
                <img src="images/pyunkang.jpg" alt="" />
                <span> Shop </span>
              </div>
              <div class="product_detail-box">
                <span> Rp. 100000 </span>
                <p>Pyunkang Yul</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="product_box">
              <div class="product_img-box">
                <img src="images/skin-5.jpeg" alt="" />
                <span> Shop </span>
              </div>
              <div class="product_detail-box">
                <span> Rp. 145000 </span>
                <p>Loreal</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="product_box">
              <div class="product_img-box">
                <img src="images/innisfree.png" alt="" />
                <span> Shop </span>
              </div>
              <div class="product_detail-box">
                <span> Rp. 90000 </span>
                <p>Innisfree</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="product_box">
              <div class="product_img-box">
                <img src="images/lokal.png" alt="" />
                <span> Shop </span>
              </div>
              <div class="product_detail-box">
                <span> Rp. 65000 </span>
                <p>Azarine</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="product_box">
              <div class="product_img-box">
                <img src="images/facial wash-1.jpeg" alt="" />
                <span> Shop </span>
              </div>
              <div class="product_detail-box">
                <span> Rp. 65000 </span>
                <p>Simple</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="product_box">
              <div class="product_img-box">
                <img src="images/origin.png" alt="" />
                <span> Shop </span>
              </div>
              <div class="product_detail-box">
                <span> Rp. 100000 </span>
                <p>Dear Me Beauty</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="product_box">
              <div class="product_img-box">
                <img src="images/coco.png" alt="" />
                <span> Shop </span>
              </div>
              <div class="product_detail-box">
                <span> Rp. 100000 </span>
                <p>True to Skin</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="product_box">
              <div class="product_img-box">
                <img src="images/facemist-3.jpeg" alt="" />
                <span> Shop </span>
              </div>
              <div class="product_detail-box">
                <span> Rp. 300000 </span>
                <p>The body shop</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="product_box">
              <div class="product_img-box">
                <img src="images/facemist-1.jpeg" alt="" />
                <span> Shop </span>
              </div>
              <div class="product_detail-box">
                <span> Rp. 200000 </span>
                <p>Lacoco</p>
              </div>
            </div>
          </a>
          <a href="">
            <div class="product_box">
              <div class="product_img-box">
                <img src="images/toner.jpeg" alt="" />
                <span> Shop </span>
              </div>
              <div class="product_detail-box">
                <span> Rp. 160000 </span>
                <p>Cosrx</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- end products section -->

    <!-- find section -->
    <section class="find_section layout_padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-8 offset-md-2">
            <div class="find_container">
              <div class="row">
                <div class="col-sm-6">
                  <div class="find_container-img">
                    <img src="images/mask-2.jpg" alt="" />
                  </div>
                </div>
                <div class="col-sm-6">
                  <h3>
                    Find Your Beauty Bestie <br />
                    total fit for ur skin<3
                  </h3>
                  <p>shop the way you like</p>
                </div>
              </div>
            </div>
            <div class="shop_container">
              <div class="row">
                <div class="col-sm-6">
                  <p>Facial wash</p>
                  <h3>Shop by categories</h3>
                  <div>
                    <a href=""> View More </a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="shoe_img-box">
                    <img src="images/facial wash-3.jpeg" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="find_img-box">
              <img src="images/hero-1.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end find section -->
    <!-- client section -->
    <section class="client_section layout_padding">
      <div class="container">
        <h2>What our Customer says</h2>
        <div
          id="carouselExample2Controls"
          class="carousel slide"
          data-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row layout_padding2">
                <div class="col-md-6">
                  <div class="client_box">
                    <div class="client_id-box">
                      <div class="client_img-box">
                        <img src="images/client.png" alt="" />
                      </div>
                      <h4>Ivan</h4>
                    </div>
                    <div class="client_detail">
                      <p>
                        suka banget sama sabun senka ini, busanya lembut hasil akhirnya bikin kulit jadi plumpy di muka aku
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="client_box">
                    <div class="client_id-box">
                      <div class="client_img-box">
                        <img src="images/client.png" alt="" />
                      </div>
                      <h4>Maharani</h4>
                    </div>
                    <div class="client_detail">
                      <p>
                        produk original terdaftar BPOM, 
                        pengiriman cepat, 
                        packaging rapih
                        Thank youuu
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row layout_padding2">
                <div class="col-md-6">
                  <div class="client_box">
                    <div class="client_id-box">
                      <div class="client_img-box">
                        <img src="images/client.png" alt="" />
                      </div>
                      <h4>Yuni</h4>
                    </div>
                    <div class="client_detail">
                      <p>
                        tidak pernah mengecewakan, harga  affordable, belanja di Geulysskin sangat mudah dan menyenangkan
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="client_box">
                    <div class="client_id-box">
                      <div class="client_img-box">
                        <img src="images/client.png" alt="" />
                      </div>
                      <h4>Putri</h4>
                    </div>
                    <div class="client_detail">
                      <p>
                        udah repurchase ini sampai botol ke-3, selalu suka dengan hasilnya
                        walaupun lumayan pricey untuk pelajar, tapi sangat rekomen untuk dibeli. ringan banget tekstur nya karena berbentuk gel dan ga lengket di kulit
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row layout_padding2">
                <div class="col-md-6">
                  <div class="client_box">
                    <div class="client_id-box">
                      <div class="client_img-box">
                        <img src="images/client.png" alt="" />
                      </div>
                      <h4>Nur</h4>
                    </div>
                    <div class="client_detail">
                      <p>
                        selalu suka dengan hasilnya dan saya sangat merekomendasikan untuk dibeli, memiliki tekstur gel yang ringan banget di kulit saya
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="client_box">
                    <div class="client_id-box">
                      <div class="client_img-box">
                        <img src="images/client.png" alt="" />
                      </div>
                      <h4>Widya</h4>
                    </div>
                    <div class="client_detail">
                      <p>
                        belanja di Geulysskin sangat memuaskan, produk original, dan seringkali banyak produk yang sale up to 70% OFF
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExample2Controls"
            role="button"
            data-slide="prev"
          >
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExample2Controls"
            role="button"
            data-slide="next"
          >
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="container">
        <div class="item_container">
          <div class="row">
            <div class="col-sm-7">
              <h3>Best sellers on skincare items</h3>
              <p>
                The Dearest Beauty Made by Love
              </p>
              <div>
                <a href=""> Explore now </a>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="item_img-box">
                <img src="images/mask-3.jpeg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end client section -->

    <!-- sign section -->
    <section class="sign_section layout_padding2">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h3 style="color: black;">Sign up for New Arrivals Beauty</h3>
            <p>
            </p>
          </div>
          <div class="col-md-7">
            <form action="">
              <input type="email" placeholder="Enter your email" />
              <button>Sign In</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- end sign section -->

    <!-- info section -->
    <section class="info_section layout_padding">
      <div class="container links_container">
        <div class="row">
          <div class="col-md-3">
            <h3>CUSTOMER SERVICE</h3>
            <ul>
              <li>
                <a href=""> International Help </a>
              </li>
              <li>
                <a href=""> Contact Customer Care </a>
              </li>
              <li>
                <a href=""> Return Policy </a>
              </li>
              <li>
                <a href=""> Privacy Policy </a>
              </li>
              <li>
                <a href=""> Shipping Information </a>
              </li>
              <li>
                <a href=""> Promotion Terms </a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>LET US HELP YOU</h3>
            <ul>
              <li>
                <a href=""> Your Account </a>
              </li>
              <li>
                <a href=""> Your Orders </a>
              </li>
              <li>
                <a href=""> Shipping Rates & Policies </a>
              </li>
              <li>
                <a href=""> Amazon Prime </a>
              </li>
              <li>
                <a href=""> Returns & Replacements </a>
              </li>
              <li>
                <a href=""> Help </a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>INFORMATION</h3>
            <ul>
              <li>
                <a href=""> About Us </a>
              </li>
              <li>
                <a href=""> Careers </a>
              </li>
              <li>
                <a href=""> Sell on shop </a>
              </li>
              <li>
                <a href=""> Press & News </a>
              </li>
              <li>
                <a href=""> Competitions </a>
              </li>
              <li>
                <a href=""> Terms & Conditions </a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3>OUR SHOP</h3>
            <ul>
              <li>
                <a href=""> Daily Deals </a>
              </li>
              <li>
                <a href=""> App Only Deals </a>
              </li>
              <li>
                <a href=""> Our Hottest Products </a>
              </li>
              <li>
                <a href=""> Gift Vouchers </a>
              </li>
              <li>
                <a href=""> Trending Product </a>
              </li>
              <li>
                <a href=""> Hot Flash Sale </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="follow_container">
          <div class="row">
            <div class="col-md-9">
              <div class="app_container">
                <h3>DOWNLOAD OUR APPS</h3>
                <div>
                  <img src="images/google-play.png" alt="" />
                  <img src="images/apple-store.png" alt="" />
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="info_social">
                <div>
                  <a href="">
                    <img src="images/fb.png" alt="" />
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/twitter.png" alt="" />
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/linkedin.png" alt="" />
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/instagram.png" alt="" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    
    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script>
      function openNav() {
        document.getElementById("myNav").style.width = "100%";
      }

      function closeNav() {
        document.getElementById("myNav").style.width = "0%";
      }
    </script>
  </body>
</html>
