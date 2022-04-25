
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cartzilla | Shop categories</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="//www.googletagmanager.com/ns.php?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-secondary">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="mb-3">
                <label class="form-label" for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3 d-flex flex-wrap justify-content-between">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="si-remember">
                  <label class="form-check-label" for="si-remember">Remember me</label>
                </div><a class="fs-sm" href="#">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="mb-3">
                <label class="form-label" for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="mb-3">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Navbar 3 Level (Light)-->
      <?php

include 'header.php';
?>
      <!-- Page Title (Light)-->
      <div class="bg-secondary py-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Categories</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 mb-0">Shop categories</h1>
          </div>
        </div>
      </div>
      <div class="container pb-4 pb-sm-5">
        <!-- Categories grid-->
        <div class="row pt-5">
          <!-- Catogory-->
          <div class="col-md-4 col-sm-6 mb-3">
            <div class="card border-0"><a class="d-block overflow-hidden rounded-3" href="shop-grid-ls.php"><img class="d-block w-100" src="img/shop/categories/01.jpg" alt="Clothing"></a>
              <div class="card-body">
                <h2 class="h5">Clothing</h2>
                <ul class="list-unstyled fs-sm mb-0">
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Blazers &amp; Suits</a><span class="fs-ms text-muted">235</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Blouse</a><span class="fs-ms text-muted">410</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Cardigans &amp; Jumpers</a><span class="fs-ms text-muted">107</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Dresses</a><span class="fs-ms text-muted">93</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Hoodie &amp; Sweatshirts</a><span class="fs-ms text-muted">93</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Sportswear</a><span class="fs-ms text-muted">65</span></li>
                  <li>...</li>
                  <li>
                    <hr>
                  </li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>View all</a><span class="fs-ms text-muted">2,548</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Catogory-->
          <div class="col-md-4 col-sm-6 mb-3">
            <div class="card border-0"><a class="d-block overflow-hidden rounded-3" href="shop-grid-ls.php"><img class="d-block w-100" src="img/shop/categories/02.jpg" alt="Shoes"></a>
              <div class="card-body">
                <h2 class="h5">Shoes</h2>
                <ul class="list-unstyled fs-sm mb-0">
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Pumps &amp; High Heels</a><span class="fs-ms text-muted">247</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Ballerinas &amp; Flats</a><span class="fs-ms text-muted">156</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Sandals</a><span class="fs-ms text-muted">310</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Sneakers</a><span class="fs-ms text-muted">402</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Boots</a><span class="fs-ms text-muted">393</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Flip Flops</a><span class="fs-ms text-muted">116</span></li>
                  <li>...</li>
                  <li>
                    <hr>
                  </li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>View all</a><span class="fs-ms text-muted">1,953</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Catogory-->
          <div class="col-md-4 col-sm-6 mb-3">
            <div class="card border-0"><a class="d-block overflow-hidden rounded-3" href="shop-grid-ls.php"><img class="d-block w-100" src="img/shop/categories/03.jpg" alt="Gadgets"></a>
              <div class="card-body">
                <h2 class="h5">Gadgets</h2>
                <ul class="list-unstyled fs-sm mb-0">
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Smartphones &amp; Tablets</a><span class="fs-ms text-muted">436</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Headphones</a><span class="fs-ms text-muted">308</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Wearable Electronics</a><span class="fs-ms text-muted">195</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Home IoT Gadgets</a><span class="fs-ms text-muted">82</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Computers &amp; Accessories</a><span class="fs-ms text-muted">264</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Cameras, Photo &amp; Video</a><span class="fs-ms text-muted">57</span></li>
                  <li>...</li>
                  <li>
                    <hr>
                  </li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>View all</a><span class="fs-ms text-muted">1,240</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Catogory-->
          <div class="col-md-4 col-sm-6 mb-3">
            <div class="card border-0"><a class="d-block overflow-hidden rounded-3" href="shop-grid-ls.php"><img class="d-block w-100" src="img/shop/categories/04.jpg" alt="Furniture"></a>
              <div class="card-body">
                <h2 class="h5">Furniture &amp; Decor</h2>
                <ul class="list-unstyled fs-sm mb-0">
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Lounge Seating</a><span class="fs-ms text-muted">374</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>File Cabinets</a><span class="fs-ms text-muted">83</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Tables</a><span class="fs-ms text-muted">125</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Indoor Lighting</a><span class="fs-ms text-muted">291</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Office Chairs</a><span class="fs-ms text-muted">118</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Adjustable Height Desks</a><span class="fs-ms text-muted">46</span></li>
                  <li>...</li>
                  <li>
                    <hr>
                  </li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>View all</a><span class="fs-ms text-muted">960</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Catogory-->
          <div class="col-md-4 col-sm-6 mb-3">
            <div class="card border-0"><a class="d-block overflow-hidden rounded-3" href="shop-grid-ls.php"><img class="d-block w-100" src="img/shop/categories/05.jpg" alt="Accessories"></a>
              <div class="card-body">
                <h2 class="h5">Accessories</h2>
                <ul class="list-unstyled fs-sm mb-0">
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Bags</a><span class="fs-ms text-muted">417</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Sunglasses</a><span class="fs-ms text-muted">382</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Watches</a><span class="fs-ms text-muted">122</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Hats</a><span class="fs-ms text-muted">204</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Jewelry</a><span class="fs-ms text-muted">149</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Cosmetics</a><span class="fs-ms text-muted">90</span></li>
                  <li>...</li>
                  <li>
                    <hr>
                  </li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>View all</a><span class="fs-ms text-muted">1,532</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Catogory-->
          <div class="col-md-4 col-sm-6 mb-3">
            <div class="card border-0"><a class="d-block overflow-hidden rounded-3" href="shop-grid-ls.php"><img class="d-block w-100" src="img/shop/categories/06.jpg" alt="Entertainment"></a>
              <div class="card-body">
                <h2 class="h5">Entertainment</h2>
                <ul class="list-unstyled fs-sm mb-0">
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Video Games, VR</a><span class="fs-ms text-muted">306</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Kid's Toys</a><span class="fs-ms text-muted">231</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Table Games</a><span class="fs-ms text-muted">114</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Outdoor / Camping</a><span class="fs-ms text-muted">92</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Gifts</a><span class="fs-ms text-muted">27</span></li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>Music, CDs &amp; Vinyl</a><span class="fs-ms text-muted">41</span></li>
                  <li>...</li>
                  <li>
                    <hr>
                  </li>
                  <li class="d-flex align-items-center justify-content-between"><a class="nav-link-style" href="#"><i class="ci-arrow-right-circle me-2"></i>View all</a><span class="fs-ms text-muted">879</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Popular brands-->
        <h2 class="h3 text-center py-4 mt-md-3">Popular brands</h2>
        <div class="row">
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/01.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/02.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/03.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/04.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/05.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/06.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/07.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/08.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/09.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/10.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/11.png" width="150" alt="Brand"></a></div>
          <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/12.png" width="150" alt="Brand"></a></div>
        </div>
      </div>
    </main>
    <!-- Footer-->
    <footer class="footer bg-dark pt-5">
      <div class="container">
        <div class="row pb-2">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Shop departments</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sneakers &amp; Athletic</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Athletic Apparel</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sandals</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Jeans</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shirts &amp; Tops</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shorts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">T-Shirts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Swimwear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Clogs &amp; Mules</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Bags &amp; Wallets</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Accessories</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses &amp; Eyewear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Watches</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Account &amp; shipping info</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Your account</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shipping rates &amp; policies</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Refunds &amp; replacements</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Order tracking</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Taxes &amp; fees</a></li>
              </ul>
            </div>
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">About us</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">About company</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Our team</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Careers</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Stay informed</h3>
              <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                  <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                  <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div>
                <div class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
                <div class="subscription-status"></div>
              </form>
            </div>
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Download our app</h3>
              <div class="d-flex flex-wrap">
                <div class="me-2 mb-2"><a class="btn-market btn-apple" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
                <div class="mb-2"><a class="btn-market btn-google" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-5 bg-darker">
        <div class="container">
          <div class="row pb-3">
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-rocket text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Fast and free delivery</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">Free delivery for all orders over $200</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-currency-exchange text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Money back guarantee</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">We return money within 30 days</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-support text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">24/7 customer support</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">Friendly 24/7 customer support</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-card text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Secure online payment</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
                </div>
              </div>
            </div>
          </div>
          <hr class="hr-light mb-5">
          <div class="row pb-2">
            <div class="col-md-6 text-center text-md-start mb-4">
              <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 me-3" href="#"><img class="d-block" src="img/footer-logo-light.png" width="117" alt="Cartzilla"></a>
                <div class="btn-group dropdown disable-autohide">
                  <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-bs-toggle="dropdown"><img class="me-2" src="img/flags/en.png" width="20" alt="English">Eng / $</button>
                  <ul class="dropdown-menu my-1">
                    <li class="dropdown-item">
                      <select class="form-select form-select-sm">
                        <option value="usd">$ USD</option>
                        <option value="eur">€ EUR</option>
                        <option value="ukp">£ UKP</option>
                        <option value="jpy">¥ JPY</option>
                      </select>
                    </li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/flags/fr.png" width="20" alt="Français">Français</a></li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/flags/de.png" width="20" alt="Deutsch">Deutsch</a></li>
                    <li><a class="dropdown-item" href="#"><img class="me-2" src="img/flags/it.png" width="20" alt="Italiano">Italiano</a></li>
                  </ul>
                </div>
              </div>
              <div class="widget widget-links widget-light">
                <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Outlets</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Affiliates</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Support</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Privacy</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Terms of use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 text-center text-md-end mb-4">
              <div class="mb-3"><a class="btn-social bs-light bs-twitter ms-2 mb-2" href="#"><i class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook ms-2 mb-2" href="#"><i class="ci-facebook"></i></a><a class="btn-social bs-light bs-instagram ms-2 mb-2" href="#"><i class="ci-instagram"></i></a><a class="btn-social bs-light bs-pinterest ms-2 mb-2" href="#"><i class="ci-pinterest"></i></a><a class="btn-social bs-light bs-youtube ms-2 mb-2" href="#"><i class="ci-youtube"></i></a></div><img class="d-inline-block" src="img/cards-alt.png" width="187" alt="Payment methods">
            </div>
          </div>
          <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
        </div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices (Default)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="account-wishlist.php"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="shop-cart.php"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">4</span></span><span class="handheld-toolbar-label">$265.00</span></a></div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>