
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cartzilla | Catalog v.1</title>
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
    <link rel="stylesheet" media="screen" href="vendor/nouislider/dist/nouislider.min.css"/>
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
      <!-- Navbar for NFT Marketplace demo-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <?php

include 'header.php';
?>
      <!-- Page Title-->
      <div class="bg-accent pt-4 pb-5">
        <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
          <div class="d-lg-flex justify-content-between pb-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                  <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="ci-home"></i>Home</a></li>
                  <li class="breadcrumb-item text-nowrap"><a href="home-nft.php">NFT Marketplace</a>
                  </li>
                  <li class="breadcrumb-item text-nowrap active" aria-current="page">All NFTs</li>
                </ol>
              </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
              <h1 class="h3 text-light mb-0">Catalog v.1</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <!-- Toolbar-->
        <div class="bg-light shadow-lg rounded-3 p-4 mt-n5 mb-4">
          <div class="row gy-3 gx-4 justify-content-between">
            <div class="col-lg-2 col-md-3 col-sm-5 col-12 order-md-1 order-sm-2 order-3">
              <div class="dropdown"><a class="btn btn-outline-secondary dropdown-toggle w-100" href="#shop-filters" data-bs-toggle="collapse"><i class="ci-filter me-2"></i>Filters</a></div>
            </div>
            <div class="col-md col-12 order-md-2 order-sm-1 order-1">
              <div class="input-group">
                <input class="form-control pe-5 rounded" type="text" placeholder="Search collection, title or user..."><i class="ci-search position-absolute top-50 end-0 translate-middle-y zindex-5 me-3"></i>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-7 col-12 order-md-3 order-sm-3 order-2">
              <div class="d-flex align-items-center flex-shrink-0">
                <label class="form-label mb-0 me-2 pe-1 fw-normal text-nowrap d-sm-block d-none">Sort by:</label>
                <select class="form-select">
                  <option selected disabled>Newest</option>
                  <option>Oldest</option>
                </select>
              </div>
            </div>
          </div>
          <!-- Toolbar with expandable filters-->
          <div class="collapse" id="shop-filters">
            <div class="row g-4 pt-4">
              <div class="col-lg-4 col-sm-6">
                <!-- Categories-->
                <div class="card">
                  <div class="card-body px-4">
                    <div class="widget">
                      <h3 class="widget-title mb-2 pb-1">Categories</h3>
                      <ul class="widget-list list-unstyled">
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="all">
                            <label class="form-check-label" for="all">All artworks</label>
                          </div><span class="fs-xs text-muted">498</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="premium">
                            <label class="form-check-label" for="premium">Premium</label>
                          </div><span class="fs-xs text-muted">25</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="art">
                            <label class="form-check-label" for="art">Art</label>
                          </div><span class="fs-xs text-muted">112</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="photography">
                            <label class="form-check-label" for="photography">Photography</label>
                          </div><span class="fs-xs text-muted">93</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="music">
                            <label class="form-check-label" for="music">Music</label>
                          </div><span class="fs-xs text-muted">48</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gaming">
                            <label class="form-check-label" for="gaming">Gaming</label>
                          </div><span class="fs-xs text-muted">82</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="sports">
                            <label class="form-check-label" for="sports">Sports</label>
                          </div><span class="fs-xs text-muted">51</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="collections">
                            <label class="form-check-label" for="collections">Collections</label>
                          </div><span class="fs-xs text-muted">11</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="utility">
                            <label class="form-check-label" for="utility">Utility</label>
                          </div><span class="fs-xs text-muted">24</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <!-- Sale Types-->
                <div class="card mb-4">
                  <div class="card-body px-4">
                    <div class="widget">
                      <h3 class="widget-title mb-2 pb-1">Sale Types</h3>
                      <ul class="widget-list list-unstyled">
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="fixed-price">
                            <label class="form-check-label" for="fixed-price">Fixed Price</label>
                          </div>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="live-auction">
                            <label class="form-check-label" for="live-auction">Live auction</label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Blockchain-->
                <div class="card">
                  <div class="card-body px-4">
                    <div class="widget">
                      <h3 class="widget-title mb-2 pb-1">Blockchain</h3>
                      <ul class="widget-list list-unstyled">
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="eth">
                            <label class="form-check-label" for="eth">ETH</label>
                          </div>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="bnb">
                            <label class="form-check-label" for="bnb">BNB</label>
                          </div>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="busd">
                            <label class="form-check-label" for="busd">BUSD</label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6">
                <!-- Price range-->
                <div class="card">
                  <div class="card-body px-4">
                    <div class="widget">
                      <h3 class="widget-title">Price range</h3>
                      <div class="range-slider" data-start-min="10" data-start-max="20" data-min="0" data-max="30" data-step="1" data-currency="ETH ">
                        <div class="range-slider-ui"></div>
                        <div class="d-flex pb-1">
                          <div class="w-50 pe-2 me-2">
                            <div class="input-group input-group-sm">
                              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">ETH</button>
                              <div class="dropdown-menu"><a class="dropdown-item" href="#">BNB</a><a class="dropdown-item" href="#">BUSD</a></div>
                              <input class="form-control range-slider-value-min" type="text">
                            </div>
                          </div>
                          <div class="w-50 ps-2">
                            <div class="input-group input-group-sm">
                              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">ETH</button>
                              <div class="dropdown-menu"><a class="dropdown-item" href="#">BNB</a><a class="dropdown-item" href="#">BUSD</a></div>
                              <input class="form-control range-slider-value-max" type="text">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Products grid-->
        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 gy-sm-4 gy-3 pt-sm-3">
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.php"><img src="img/nft/catalog/01.jpg" alt="Product image"></a>
                <!-- Countdown timer-->
                <div class="badge bg-dark m-3 fs-sm position-absolute top-0 start-0 zindex-5"><i class="ci-time me-1"></i>
                  <div class="countdown d-inline" data-countdown="12/31/2022 12:00:00 PM"><span class="countdown-hours mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-minutes mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-seconds mb-0 me-0"><span class="countdown-value">0</span></span></div>
                </div>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.php">3d aesthetics with shapes</a></h3><span class="fs-sm text-muted">Current bid:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.156 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 595.76)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/01.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@foxnet_creator</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.php"><img src="img/nft/catalog/02.jpg" alt="Product image"></a>
                <!-- Countdown timer-->
                <div class="badge bg-dark m-3 fs-sm position-absolute top-0 start-0 zindex-5"><i class="ci-time me-1"></i>
                  <div class="countdown d-inline" data-countdown="12/31/2022 09:00:00 PM"><span class="countdown-hours mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-minutes mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-seconds mb-0 me-0"><span class="countdown-value">0</span></span></div>
                </div>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.php">Ocean and sky</a></h3><span class="fs-sm text-muted">Current bid:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.5 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 2,000.55)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/02.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@YunusKullebi</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-buy.php"><img src="img/nft/catalog/03.jpg" alt="Product image"></a>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-buy.php">Aesthetic art collage</a></h3><span class="fs-sm text-muted">Reserve price:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.6 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 2,400.65)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/03.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@lulucollages</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-buy.php"><img src="img/nft/catalog/04.jpg" alt="Product image"></a>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-buy.php">Astronaut surrounded by lights</a></h3><span class="fs-sm text-muted">Reserve price:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.1 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 400.19)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/04.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@DistroKid</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-buy.php"><img src="img/nft/catalog/05.jpg" alt="Product image"></a>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-buy.php">Aesthetic art collage</a></h3><span class="fs-sm text-muted">Reserve price:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.6 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 2,400.65)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/05.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@Sharan_Pagadala</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.php"><img src="img/nft/catalog/06.jpg" alt="Product image"></a>
                <!-- Countdown timer-->
                <div class="badge bg-dark m-3 fs-sm position-absolute top-0 start-0 zindex-5"><i class="ci-time me-1"></i>
                  <div class="countdown d-inline" data-countdown="12/31/2022 12:00:00 PM"><span class="countdown-hours mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-minutes mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-seconds mb-0 me-0"><span class="countdown-value">0</span></span></div>
                </div>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.php">Ocean and sky</a></h3><span class="fs-sm text-muted">Current bid:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.5 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 2,000.55)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/06.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@Simonlee</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.php"><img src="img/nft/catalog/07.jpg" alt="Product image"></a>
                <!-- Countdown timer-->
                <div class="badge bg-dark m-3 fs-sm position-absolute top-0 start-0 zindex-5"><i class="ci-time me-1"></i>
                  <div class="countdown d-inline" data-countdown="12/31/2022 12:00:00 PM"><span class="countdown-hours mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-minutes mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-seconds mb-0 me-0"><span class="countdown-value">0</span></span></div>
                </div>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.php">3d aesthetics with shapes</a></h3><span class="fs-sm text-muted">Current bid:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.156 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 595.76)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/07.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@Shubham_Dhage</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.php"><img src="img/nft/catalog/08.jpg" alt="Product image"></a>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.php">Astronaut surrounded by lights</a></h3><span class="fs-sm text-muted">Reserve price:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.1 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 400.19)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/08.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@DistroKid</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.php"><img src="img/nft/catalog/09.jpg" alt="Product image"></a>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.php">3d aesthetics with shapes</a></h3><span class="fs-sm text-muted">Current bid:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.156 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 595.76)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/09.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@shubham_dhage</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.php"><img src="img/nft/catalog/10.jpg" alt="Product image"></a>
                <!-- Countdown timer-->
                <div class="badge bg-dark m-3 fs-sm position-absolute top-0 start-0 zindex-5"><i class="ci-time me-1"></i>
                  <div class="countdown d-inline" data-countdown="12/31/2022 12:00:00 PM"><span class="countdown-hours mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-minutes mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-seconds mb-0 me-0"><span class="countdown-value">0</span></span></div>
                </div>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.php">Ocean and sky</a></h3><span class="fs-sm text-muted">Current bid:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.5 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 2,000.55)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/10.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@MihailGreen</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-buy.php"><img src="img/nft/catalog/11.jpg" alt="Product image"></a>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-buy.php">Aesthetic art collage</a></h3><span class="fs-sm text-muted">Reserve price:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.6 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 2,400.65)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/11.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@lulucollages</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.php"><img src="img/nft/catalog/12.jpg" alt="Product image"></a>
                <!-- Countdown timer-->
                <div class="badge bg-dark m-3 fs-sm position-absolute top-0 start-0 zindex-5"><i class="ci-time me-1"></i>
                  <div class="countdown d-inline" data-countdown="12/31/2022 09:00:00 PM"><span class="countdown-hours mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-minutes mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-seconds mb-0 me-0"><span class="countdown-value">0</span></span></div>
                </div>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.php">Astronaut surrounded by lights</a></h3><span class="fs-sm text-muted">Reserve price:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.1 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 400.19)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/12.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@Sharan_Pagadala</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.php"><img src="img/nft/catalog/13.jpg" alt="Product image"></a>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.php">3d aesthetics with shapes</a></h3><span class="fs-sm text-muted">Current bid:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.156 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 595.76)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/13.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@ZeniconStudio</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.php"><img src="img/nft/catalog/14.jpg" alt="Product image"></a>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.php">Ocean and sky</a></h3><span class="fs-sm text-muted">Current bid:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.5 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 2,000.55)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/14.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@42Labs</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.php"><img src="img/nft/catalog/15.jpg" alt="Product image"></a>
                <!-- Countdown timer-->
                <div class="badge bg-dark m-3 fs-sm position-absolute top-0 start-0 zindex-5"><i class="ci-time me-1"></i>
                  <div class="countdown d-inline" data-countdown="12/31/2022 09:00:00 PM"><span class="countdown-hours mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-minutes mb-0 me-0"><span class="countdown-value">0</span><span class="countdown-label fs-lg">:</span></span><span class="countdown-seconds mb-0 me-0"><span class="countdown-value">0</span></span></div>
                </div>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.php">Aesthetic art collage</a></h3><span class="fs-sm text-muted">Reserve price:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.6 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 2,400.65)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/15.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@Simonlee</a></div>
              </div>
            </article>
          </div>
          <!-- Product-->
          <div class="col mb-2">
            <article class="card h-100 border-0 shadow">
              <div class="card-img-top position-relative overflow-hidden"><a class="d-block" href="nft-single-auction-live.php"><img src="img/nft/catalog/16.jpg" alt="Product image"></a>
                <!-- Wishlist button-->
                <button class="btn-wishlist btn-sm position-absolute top-0 end-0" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to Favorites" style="margin: 12px;"><i class="ci-heart"></i></button>
              </div>
              <div class="card-body">
                <h3 class="product-title mb-2 fs-base"><a class="d-block text-truncate" href="nft-single-auction-live.php">Astronaut surrounded by lights</a></h3><span class="fs-sm text-muted">Reserve price:</span>
                <div class="d-flex align-items-center flex-wrap">
                  <h4 class="mt-1 mb-0 fs-base text-darker">0.1 ETH</h4><span class="mt-1 ms-1 fs-xs text-muted">(≈ $ 400.19)</span>
                </div>
              </div>
              <div class="card-footer mt-n1 py-0 border-0">
                <div class="d-flex align-items-center position-relative mb-1 py-3 border-top"><img class="me-2 rounded-circle" src="img/nft/catalog/avatars/16.png" width="32" alt="Avatar"><a class="nav-link-style fs-sm stretched-link" href="nft-vendor.php">@distrokid</a></div>
              </div>
            </article>
          </div>
        </div>
        <hr class="mt-4 mb-3">
        <!-- Pagination-->
        <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><i class="ci-arrow-left me-2"></i>Prev</a></li>
          </ul>
          <ul class="pagination">
            <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
            <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
          </ul>
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i></a></li>
          </ul>
        </nav>
      </div>
    </main>
    <!-- Bg shape-->
    <div class="pt-4 bg-secondary">
      <!-- Features-->
      <section class="container py-lg-5 py-4">
        <h2 class="mb-4 pb-md-3 pb-2">Begin your NFT journey with us!</h2>
        <!-- Features carousel-->
        <div class="tns-carousel mb-4">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;nav&quot;: true, &quot;gutter&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1,&quot;controls&quot;: false},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}, &quot;1100&quot;:{&quot;items&quot;:4}, &quot;1278&quot;:{&quot;controls&quot;: true}}}">
            <!-- Carousel item-->
            <div><img class="mb-4" src="img/nft/features/wallet.svg" width="60" alt="Icon">
              <h4 class="mb-2 fs-lg text-body">Set up your wallet</h4>
              <p class="mb-0 fs-sm text-muted">Quam nulla in id nibh. Morbi eget elit eget dui est pretium, blandit penatibus blandit. Amet mattis blandit urna volutpat.</p>
            </div>
            <!-- Carousel item-->
            <div><img class="mb-4" src="img/nft/features/add.svg" width="60" alt="Icon">
              <h4 class="mb-2 fs-lg text-body">Create your collection</h4>
              <p class="mb-0 fs-sm text-muted">Fringilla ullamcorper aenean tellus ullamcorper neque, malesuada. Aliquam consequat nunc.</p>
            </div>
            <!-- Carousel item-->
            <div><img class="mb-4" src="img/nft/features/image.svg" width="60" alt="Icon">
              <h4 class="mb-2 fs-lg text-body">Add your NFTs</h4>
              <p class="mb-0 fs-sm text-muted">Platea eu aliquam pellentesque parturient. Volutpat, fermentum suspendisse at nisi cras mattis augue.</p>
            </div>
            <!-- Carousel item-->
            <div><img class="mb-4" src="img/nft/features/shopping-cart.svg" width="60" alt="Icon">
              <h4 class="mb-2 fs-lg text-body">List them for sale</h4>
              <p class="mb-0 fs-sm text-muted">In eget nulla id feugiat ut placerat sapien malesuada. Sed id risus non accumsan eu amet ut pellentesque.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Mail subscription-->
      <section class="container">
        <div class="card py-5 border-0 shadow">
          <div class="card-body py-md-4 py-3 px-4 text-center">
            <h3 class="mb-3">Never miss a drop!</h3>
            <p class="mb-4 pb-2">Subscribe to our ultra-exclusive drop list and be the first to know about upcoming drops.</p>
            <div class="widget mx-auto" style="max-width: 500px;">
              <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                  <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                  <button class="btn btn-accent" type="submit" name="subscribe">Subscribe*</button>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div>
                <div class="form-text mt-3">*Receive early discount offers, updates and new products info.</div>
                <div class="subscription-status"></div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Footer-->
    <footer class="footer bg-darker">
      <div class="mt-n10 pt-10 bg-dark">
        <div class="container py-5">
          <div class="row py-lg-4">
            <div class="col-lg-4 mb-lg-0 mb-4">
              <div class="widget pb-3 mb-lg-4">
                <h3 class="widget-title text-light pb-1">Stay informed</h3>
                <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                  <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                    <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                    <button class="btn btn-accent" type="submit" name="subscribe">Subscribe*</button>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                  </div>
                  <div class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
                  <div class="subscription-status"></div>
                </form>
              </div>
              <div><a class="btn-social bs-light bs-twitter me-2 mb-2" href="#"><i class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook me-2 mb-2" href="#"><i class="ci-facebook"></i></a><a class="btn-social bs-light bs-instagram me-2 mb-2" href="#"><i class="ci-instagram"></i></a><a class="btn-social bs-light bs-pinterest me-2 mb-2" href="#"><i class="ci-pinterest"></i></a><a class="btn-social bs-light bs-youtube me-2 mb-2" href="#"><i class="ci-youtube"></i></a></div>
            </div>
            <div class="col-lg-6 offset-lg-1">
              <div class="d-flex flex-sm-row flex-column justify-content-sm-between mt-n4 mx-lg-n3">
                <div class="widget widget-links widget-light mt-4 px-lg-3 px-sm-n2">
                  <h3 class="widget-title text-light">Company</h3>
                  <ul class="widget-list">
                    <li class="widget-list-item"><a class="widget-list-link" href="#">About Us</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">How It Works</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Create an NFT With Us</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Support</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Blog</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">My Account</a></li>
                  </ul>
                </div>
                <div class="widget widget-links widget-light mt-4 px-lg-3 px-sm-n2">
                  <h3 class="widget-title text-light">Marketplace</h3>
                  <ul class="widget-list">
                    <li class="widget-list-item"><a class="widget-list-link" href="#">All NFTs</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">New</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Art</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Music</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Photography</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Utility</a></li>
                  </ul>
                </div>
                <div class="widget widget-links widget-light mt-4 px-lg-3 px-sm-n2">
                  <h3 class="widget-title text-light">Help</h3>
                  <ul class="widget-list">
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Terms and Conditions</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">Privacy Policy</a></li>
                    <li class="widget-list-item"><a class="widget-list-link" href="#">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container my-lg-4 my-3 py-2">
        <div class="d-flex flex-md-row flex-column-reverse align-items-center justify-content-md-between">
          <div class="fs-xs text-light opacity-50">&copy; All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
          <div class="d-flex align-items-start mb-md-0 mb-3 mx-n1">
            <div class="px-1"><a class="btn-market btn-apple bg-dark" href="#"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
            <div class="px-1"><a class="btn-market btn-google bg-dark" href="#"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices (NFT Marketplace)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-none handheld-toolbar-item" href="#vendor-sidebar" data-bs-toggle="offcanvas"><span class="handheld-toolbar-icon"><i class="ci-sign-in"></i></span><span class="handheld-toolbar-label">Sidebar</span></a><a class="d-table-cell handheld-toolbar-item" href="#signin-modal" data-bs-toggle="modal"><span class="handheld-toolbar-icon"><i class="ci-user"></i></span><span class="handheld-toolbar-label">Account</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="nft-connect-wallet.php"><span class="handheld-toolbar-icon"><i class="ci-wallet"></i></span><span class="handheld-toolbar-label text-nowrap">Connect wallet</span></a>
      </div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/nouislider/dist/nouislider.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>