@extends('layout.web.app')
@section('content')

    <body class="shop-listing shop-fullwidth">
        <!-- Page Loader -->
        <div id="pre-loader">
            <img src="assets/images/loader.gif" alt="Loading..." />
        </div>
        <!-- End Page Loader -->

        <!--Page Wrapper-->
        <div class="page-wrapper">
            <!--Header-->

            <!--End Header-->
            <!--Mobile Menu-->

            <!--End Mobile Menu-->

            <!--Body Container-->
            <div id="page-content">
                <!--Collection Banner-->
                <div class="collection-header">
                    <div class="collection-hero">
                        <div class="collection-hero__image"></div>
                        <div class="collection-hero__title-wrapper container">
                            <h1 class="collection-hero__title">Shop Fullwidth</h1>
                            <div class="breadcrumbs text-uppercase mt-1 mt-lg-2">
                                <a href="index.html" title="Back to the home page">Home</a><span>|</span><span
                                    class="fw-bold">Shop Fullwidth</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Collection Banner-->

                <div class="container-fluid">
                    <div class="row">
                        <!--Sidebar-->

                        <!--Categories-->
                        <!--Price Filter-->

                        <!--End Price Filter-->
                        <!--Color Swatches-->

                        <!--End Color Swatches-->
                        <!--Size Swatches-->

                        <!--End Size Swatches-->
                        <!--Product type-->

                        <!--End Product type-->
                        <!--Brand-->

                        <!--End Brand-->
                        <!--Availability-->

                        <!--End Availability-->
                        <!--Product Tags-->

                        <!--End Product Tags-->
                        <!--Popular Products-->
                        <div class="sidebar_widget sidePro">
                            <div class="widget-title">
                                <h2>Popular Products</h2>
                            </div>
                            <div class="widget-content">
                                <div class="sideProSlider grid-products">
                                    <div class="col-12 item">
                                        <!--Start Product Image-->
                                        <div class="product-image">
                                            <!--Start Product Image-->
                                            <a href="product-layout1.html" class="product-img">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload"
                                                    data-src="assets/images/products/product-1.jpg"
                                                    src="assets/images/products/product-1.jpg" alt="image" title="" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload"
                                                    data-src="assets/images/products/product-1-1.jpg"
                                                    src="assets/images/products/product-1-1.jpg" alt="image" title="" />
                                                <!-- End hover image -->
                                            </a>
                                            <!--End Product Image-->

                                            <!--Countdown Timer-->
                                            <div class="saleTime" data-countdown="2029/03/01"></div>
                                            <!--End Countdown Timer-->

                                            <!--Product Button-->
                                            <div class="button-set style0 d-none d-md-block">
                                                <ul>
                                                    <!--Cart Button-->
                                                    <li>
                                                        <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                            href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                            <span class="tooltip-label top">Add to Cart</span></a>
                                                    </li>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <li>
                                                        <a class="btn-icon quick-view-popup quick-view"
                                                            href="javascript:void(0)" data-toggle="modal"
                                                            data-target="#content_quickview"><i
                                                                class="icon an an-search-l"></i>
                                                            <span class="tooltip-label top">Quick View</span></a>
                                                    </li>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <li>
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html"><i class="icon an an-heart-l"></i>
                                                            <span class="tooltip-label top">Add To
                                                                Wishlist</span></a>
                                                    </li>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <li>
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                            <span class="tooltip-label top">Add to
                                                                Compare</span></a>
                                                    </li>
                                                    <!--End Compare Button-->
                                                </ul>
                                            </div>
                                            <!--End Product Button-->
                                        </div>
                                        <!--End Product Image-->
                                        <!--Start Product Details-->
                                        <div class="product-details text-center">
                                            <!--Product Name-->
                                            <div class="product-name text-uppercase">
                                                <a href="product-layout1.html">Floral Crop Top</a>
                                            </div>
                                            <!--End Product Name-->
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="old-price">$199.00</span>
                                                <span class="price">$219.00</span>
                                            </div>
                                            <!--End Product Price-->
                                            <!--Product Review-->
                                            <div class="product-review d-flex align-items-center justify-content-center">
                                                <i class="an an-star"></i><i class="an an-star"></i><i
                                                    class="an an-star"></i><i class="an an-star"></i><i
                                                    class="an an-star-o"></i>
                                                <span class="caption hidden ms-2">3 reviews</span>
                                            </div>
                                            <!--End Product Review-->
                                            <!--Color Variant -->
                                            <ul class="image-swatches swatches mb-0">
                                                <li class="radius blue medium">
                                                    <span class="swacth-btn"></span><span
                                                        class="tooltip-label">Blue</span>
                                                </li>
                                                <li class="radius pink medium">
                                                    <span class="swacth-btn"></span><span
                                                        class="tooltip-label">Pink</span>
                                                </li>
                                                <li class="radius red medium">
                                                    <span class="swacth-btn"></span><span
                                                        class="tooltip-label">Red</span>
                                                </li>
                                                <li class="radius yellow medium">
                                                    <span class="swacth-btn"></span><span
                                                        class="tooltip-label">Yellow</span>
                                                </li>
                                            </ul>
                                            <!--End Color Variant-->
                                        </div>
                                        <!--End Product Details-->
                                    </div>
                                    <div class="col-12 item">
                                        <!--Start Product Image-->
                                        <div class="product-image">
                                            <!--Start Product Image-->
                                            <a href="product-layout1.html" class="product-img">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload"
                                                    data-src="assets/images/products/product-2.jpg"
                                                    src="assets/images/products/product-2.jpg" alt="image" title="" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload"
                                                    data-src="assets/images/products/product-2-1.jpg"
                                                    src="assets/images/products/product-2-1.jpg" alt="image" title="" />
                                                <!-- End hover image -->
                                                <!-- product label -->
                                                <div class="product-labels">
                                                    <span class="lbl on-sale rounded">Sale</span>
                                                </div>
                                                <!-- End product label -->
                                            </a>
                                            <!--End Product Image-->

                                            <!--Product Button-->
                                            <div class="button-set style0 d-none d-md-block">
                                                <ul>
                                                    <!--Cart Button-->
                                                    <li>
                                                        <a class="btn-icon btn cartIcon pro-quickshop-popup"
                                                            href="#pro-quickshop2" data-bs-toggle="offcanvas"
                                                            data-bs-target="#pro-quickshop2"
                                                            aria-controls="pro-quickshop2"><i class="icon an an-cart-l"></i>
                                                            <span class="tooltip-label top">Quick Shop</span></a>
                                                    </li>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <li>
                                                        <a class="btn-icon quick-view-popup quick-view"
                                                            href="javascript:void(0)" data-toggle="modal"
                                                            data-target="#content_quickview"><i
                                                                class="icon an an-search-l"></i>
                                                            <span class="tooltip-label top">Quick View</span></a>
                                                    </li>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <li>
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html"><i class="icon an an-heart-l"></i>
                                                            <span class="tooltip-label top">Add To
                                                                Wishlist</span></a>
                                                    </li>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <li>
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                            <span class="tooltip-label top">Add to
                                                                Compare</span></a>
                                                    </li>
                                                    <!--End Compare Button-->
                                                </ul>
                                            </div>
                                            <!--End Product Button-->

                                            <!-- Product Quickshop Form -->
                                            <div class="quickshop-content d-flex-center" data-bs-scroll="true"
                                                data-bs-backdrop="false" tabindex="-1" id="pro-quickshop2">
                                                <button type="button"
                                                    class="btn-close text-reset ms-auto position-absolute top-0 end-0 m-1"
                                                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                <div
                                                    class="offcanvas-body quickshop-variant h-100 d-flex align-items-start align-items-sm-center">
                                                    <form method="post" action="#" id="product_form_1053"
                                                        class="product-form align-items-center text-center hidedropdown"
                                                        accept-charset="UTF-8" enctype="multipart/form-data">
                                                        <!-- Product Price -->
                                                        <div class="product-single__price lh-1 mb-3 mt-0 mx-auto">
                                                            <span class="visually-hidden">Regular price</span>
                                                            <span class="product-price__sale--single">
                                                                <span
                                                                    class="product-price-old-price d-none">$200.00</span><span
                                                                    class="product-price__price product-price__sale0">$199.00</span>
                                                            </span>
                                                        </div>
                                                        <!-- End Product Price -->
                                                        <!-- Swatches Color -->
                                                        <div class="swatches-image swatch clearfix mb-3 swatch-0 option1"
                                                            data-option-index="0">
                                                            <div class="product-form__item">
                                                                <label
                                                                    class="label d-flex justify-content-center">Color:<span
                                                                        class="required d-none">*</span><span
                                                                        class="slVariant ms-1 fw-bold">Black</span></label>
                                                                <ul
                                                                    class="swatches d-flex-justify-center list-unstyled m-0 clearfix">
                                                                    <li
                                                                        class="swatch-element rounded-0 color gray available active">
                                                                        <label class="swatchLbl rounded-0 color small gray"
                                                                            title="Gray"></label>
                                                                        <span class="tooltip-label top">Gray</span>
                                                                    </li>
                                                                    <li data-value="Peach"
                                                                        class="swatch-element rounded-0 color orange available">
                                                                        <label
                                                                            class="swatchLbl rounded-0 color small orange"
                                                                            title="Orange"></label>
                                                                        <span class="tooltip-label top">Orange</span>
                                                                    </li>
                                                                    <li data-value="White"
                                                                        class="swatch-element rounded-0 color brown available">
                                                                        <label
                                                                            class="swatchLbl rounded-0 color small brown"
                                                                            title="Brown"></label>
                                                                        <span class="tooltip-label top">Brown</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- End Swatches Color -->
                                                        <!-- Swatches Size -->
                                                        <div class="swatch clearfix mb-3 swatch-1 option2"
                                                            data-option-index="1">
                                                            <div class="product-form__item">
                                                                <label
                                                                    class="label d-flex justify-content-center">Size:<span
                                                                        class="required d-none">*</span><span
                                                                        class="slVariant ms-1 fw-bold">S</span></label>
                                                                <ul
                                                                    class="swatches-size d-flex-justify-center list-unstyled m-0 clearfix">
                                                                    <li data-value="S"
                                                                        class="swatch-element s available active">
                                                                        <label class="swatchLbl rounded-0 medium"
                                                                            title="S">S</label><span
                                                                            class="tooltip-label">S</span>
                                                                    </li>
                                                                    <li data-value="M" class="swatch-element m available">
                                                                        <label class="swatchLbl rounded-0 medium"
                                                                            title="M">M</label><span
                                                                            class="tooltip-label">M</span>
                                                                    </li>
                                                                    <li data-value="L" class="swatch-element l available">
                                                                        <label class="swatchLbl rounded-0 medium"
                                                                            title="L">L</label><span
                                                                            class="tooltip-label">L</span>
                                                                    </li>
                                                                    <li data-value="XL"
                                                                        class="swatch-element xl available">
                                                                        <label class="swatchLbl rounded-0 medium"
                                                                            title="XL">XL</label><span
                                                                            class="tooltip-label">XL</span>
                                                                    </li>
                                                                    <li data-value="XS" class="swatch-element xs soldout">
                                                                        <label class="swatchLbl rounded-0 medium"
                                                                            title="XS">XS</label><span
                                                                            class="tooltip-label">XS</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- End Swatches Size -->
                                                        <!-- Product Action -->
                                                        <div class="product-form-submit mx-auto">
                                                            <button type="submit" name="add"
                                                                class="btn rounded product-form__cart-submit btn-small px-3">
                                                                <span>Add to cart</span>
                                                            </button>
                                                            <button type="submit" name="add"
                                                                class="btn rounded product-form__sold-out btn-small px-3 d-none"
                                                                disabled="disabled">
                                                                Sold out
                                                            </button>
                                                            <button type="button" name="buy"
                                                                class="btn rounded btn-outline-primary proceed-to-checkout btn-small px-3 d-none">
                                                                Buy it now
                                                            </button>
                                                        </div>
                                                        <!-- End Product Action -->
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- End Product Quickshop Form -->
                                        </div>
                                        <!--End Product Image-->
                                        <!--Start Product Details-->
                                        <div class="product-details text-center">
                                            <!--Product Name-->
                                            <div class="product-name text-uppercase">
                                                <a href="product-layout1.html">Mini Sleev Top</a>
                                            </div>
                                            <!--End Product Name-->
                                            <!--Product Price-->
                                            <div class="product-price">
                                                <span class="price">$199.00</span>
                                            </div>
                                            <!--End Product Price-->
                                            <!--Product Review-->
                                            <div class="product-review d-flex align-items-center justify-content-center">
                                                <i class="an an-star"></i><i class="an an-star"></i><i
                                                    class="an an-star"></i><i class="an an-star"></i><i
                                                    class="an an-star"></i>
                                                <span class="caption hidden ms-2">8 reviews</span>
                                            </div>
                                            <!--End Product Review-->
                                            <!--Color Variant-->
                                            <ul class="swatches mb-0">
                                                <li class="swatch medium radius black">
                                                    <span class="tooltip-label">Black</span>
                                                </li>
                                                <li class="swatch medium radius navy">
                                                    <span class="tooltip-label">Navy</span>
                                                </li>
                                                <li class="swatch medium radius purple">
                                                    <span class="tooltip-label">Purple</span>
                                                </li>
                                            </ul>
                                            <!--End Color Variant-->
                                        </div>
                                        <!--End Product Details-->
                                    </div>
                                    <div class="col-12 item">
                                        <!--Start Product Image-->
                                        <div class="product-image">
                                            <!--Start Product Image -->
                                            <a href="product-layout1.html" class="product-img">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload"
                                                    data-src="assets/images/products/product-3.jpg"
                                                    src="assets/images/products/product-3.jpg" alt="image" title="" />
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload"
                                                    data-src="assets/images/products/product-3-1.jpg"
                                                    src="assets/images/products/product-3-1.jpg" alt="image" title="" />
                                                <!-- End hover image -->
                                            </a>
                                            <!--End Product Image-->
                                            <!--Product label-->
                                            <div class="product-labels">
                                                <span class="lbl pr-label1 rounded">New</span>
                                            </div>
                                            <!--Product label-->

                                            <!--Product Button-->
                                            <div class="button-set style0 d-none d-md-block">
                                                <ul>
                                                    <!--Cart Button-->
                                                    <li>
                                                        <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                            href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                            <span class="tooltip-label top">Add to Cart</span></a>
                                                    </li>
                                                    <!--End Cart Button-->
                                                    <!--Quick View Button-->
                                                    <li>
                                                        <a class="btn-icon quick-view-popup quick-view"
                                                            href="javascript:void(0)" data-toggle="modal"
                                                            data-target="#content_quickview"><i
                                                                class="icon an an-search-l"></i>
                                                            <span class="tooltip-label top">Quick View</span></a>
                                                    </li>
                                                    <!--End Quick View Button-->
                                                    <!--Wishlist Button-->
                                                    <li>
                                                        <a class="btn-icon wishlist add-to-wishlist"
                                                            href="my-wishlist.html"><i class="icon an an-heart-l"></i>
                                                            <span class="tooltip-label top">Add To
                                                                Wishlist</span></a>
                                                    </li>
                                                    <!--End Wishlist Button-->
                                                    <!--Compare Button-->
                                                    <li>
                                                        <a class="btn-icon compare add-to-compare"
                                                            href="compare-style2.html"><i class="icon an an-sync-ar"></i>
                                                            <span class="tooltip-label top">Add to
                                                                Compare</span></a>
                                                    </li>
                                                    <!--End Compare Button-->
                                                </ul>
                                            </div>
                                            <!--End Product Button-->
                                        </div>
                                        <!--End Product Image-->
                                        <!--Start Product Details-->
                                        <div class="product-details text-center">
                                            <!--Product name-->
                                            <div class="product-name text-uppercase">
                                                <a href="product-layout1.html">Ditsy Floral Dress</a>
                                            </div>
                                            <!--End product name-->
                                            <!--Product price-->
                                            <div class="product-price">
                                                <span class="price">$99.00</span>
                                            </div>
                                            <!--End product price-->
                                            <!--Product Review-->
                                            <div class="product-review d-flex align-items-center justify-content-center">
                                                <i class="an an-star"></i><i class="an an-star"></i><i
                                                    class="an an-star"></i><i class="an an-star"></i><i
                                                    class="an an-star-o"></i>
                                                <span class="caption hidden ms-2">12 reviews</span>
                                            </div>
                                            <!--End Product Review-->
                                            <!--Color Variant-->
                                            <ul class="swatches mb-0">
                                                <li class="swatch medium radius red">
                                                    <span class="tooltip-label">red</span>
                                                </li>
                                                <li class="swatch medium radius orange">
                                                    <span class="tooltip-label">orange</span>
                                                </li>
                                                <li class="swatch medium radius yellow">
                                                    <span class="tooltip-label">yellow</span>
                                                </li>
                                            </ul>
                                            <!--End Color Variant-->
                                        </div>
                                        <!--End Product Details-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Popular Products-->
                        <!--Banner-->
                        <div class="sidebar_widget static-banner">
                            <a href="shop-fullwidth.html"><img src="assets/images/shop-banner.jpg" alt="image" /></a>
                        </div>
                        <!--End Banner-->
                    </div>
                </div>
                <!--End Sidebar-->

                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                    <!--Active Filters-->
                    <ul class="active-filters d-flex flex-wrap align-items-center m-0 list-unstyled d-none">
                        <li><a href="#">Clear all</a></li>
                        <li>
                            <a href="#">Men <i class="an an-times-l"></i></a>
                        </li>
                        <li>
                            <a href="#">Neckalses <i class="an an-times-l"></i></a>
                        </li>
                        <li>
                            <a href="#">Accessories <i class="an an-times-l"></i></a>
                        </li>
                    </ul>
                    <!--End Active Filters-->
                    <!--Toolbar-->
                    <div class="toolbar mt-0">
                        <div class="filters-toolbar-wrapper">
                            <ul class="list-unstyled d-flex align-items-center">
                                <li class="product-count d-flex align-items-center">
                                    <button type="button"
                                        class="btn btn-filter d-flex align-items-center an an-slider-3 me-2 me-sm-3">
                                        Filter
                                    </button>
                                    <div class="filters-toolbar__item">
                                        <span class="filters-toolbar__product-count d-none d-sm-block">Showing: 21
                                            products</span>
                                    </div>
                                </li>
                                <li class="collection-view ms-sm-auto">
                                    <div class="filters-toolbar__item collection-view-as d-flex align-items-center me-3">
                                        <a href="javascript:void(0)" class="change-view prd-grid change-view--active"><i
                                                class="icon an an-th" aria-hidden="true"></i><span
                                                class="tooltip-label">Grid View</span></a>
                                        <a href="javascript:void(0)" class="change-view prd-list"><i
                                                class="icon an an-th-list" aria-hidden="true"></i><span
                                                class="tooltip-label">List View</span></a>
                                    </div>
                                </li>
                                <li class="filters-sort ms-auto ms-sm-0">
                                    <div class="filters-toolbar__item">
                                        <label for="SortBy" class="hidden">Sort by:</label>
                                        <select name="SortBy" id="SortBy"
                                            class="filters-toolbar__input filters-toolbar__input--sort">
                                            <option value="featured" selected="selected">
                                                Featured
                                            </option>
                                            <option value="best-selling">Best selling</option>
                                            <option value="title-ascending">
                                                Alphabetically, A-Z
                                            </option>
                                            <option value="title-descending">
                                                Alphabetically, Z-A
                                            </option>
                                            <option value="price-ascending">
                                                Price, low to high
                                            </option>
                                            <option value="price-descending">
                                                Price, high to low
                                            </option>
                                            <option value="created-ascending">
                                                Date, old to new
                                            </option>
                                            <option value="created-descending">
                                                Date, new to old
                                            </option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Toolbar-->

                    <!--Product Grid-->
                    <div class="grid-products grid--view-items shop-grid-5 prd-grid">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-1.jpg"
                                            src="assets/images/products/product-1.jpg" alt="image" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-1-1.jpg"
                                            src="assets/images/products/product-1-1.jpg" alt="image" title="" />
                                        <!-- End hover image -->
                                    </a>
                                    <!--End Product Image-->

                                    <!--Countdown Timer-->
                                    <div class="saleTime" data-countdown="2024/10/01"></div>
                                    <!--End Countdown Timer-->

                                    <!--Product Button-->
                                    <div class="button-set style0 d-none d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li>
                                                <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                    href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                    <span class="tooltip-label top">Add to Cart</span></a>
                                            </li>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <li>
                                                <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#content_quickview"><i
                                                        class="icon an an-search-l"></i>
                                                    <span class="tooltip-label top">Quick View</span></a>
                                            </li>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <li>
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                        class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label top">Add To Wishlist</span></a>
                                            </li>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <li>
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                                        class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label top">Add to Compare</span></a>
                                            </li>
                                            <!--End Compare Button-->
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name text-uppercase">
                                        <a href="product-layout1.html">Floral Crop Top</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="old-price">$199.00</span>
                                        <span class="price">$219.00</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star-o"></i>
                                        <span class="caption hidden ms-2">3 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant -->
                                    <ul class="image-swatches swatches">
                                        <li class="radius blue medium">
                                            <span class="swacth-btn"></span><span class="tooltip-label">Blue</span>
                                        </li>
                                        <li class="radius pink medium">
                                            <span class="swacth-btn"></span><span class="tooltip-label">Pink</span>
                                        </li>
                                        <li class="radius red medium">
                                            <span class="swacth-btn"></span><span class="tooltip-label">Red</span>
                                        </li>
                                        <li class="radius yellow medium">
                                            <span class="swacth-btn"></span><span class="tooltip-label">Yellow</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                                        class="icon hidden an an-cart-l"></i>Add To
                                                    Cart</a>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-2.jpg"
                                            src="assets/images/products/product-2.jpg" alt="image" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-2-1.jpg"
                                            src="assets/images/products/product-2-1.jpg" alt="image" title="" />
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels">
                                            <span class="lbl on-sale rounded">Sale</span>
                                        </div>
                                        <!-- End product label -->
                                    </a>
                                    <!--End Product Image-->

                                    <!--Product Button-->
                                    <div class="button-set style0 d-none d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li>
                                                <a class="btn-icon btn cartIcon pro-quickshop-popup" href="#pro-quickshop1"
                                                    data-bs-toggle="offcanvas" data-bs-target="#pro-quickshop1"
                                                    aria-controls="pro-quickshop1"><i class="icon an an-cart-l"></i>
                                                    <span class="tooltip-label top">Quick Shop</span></a>
                                            </li>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <li>
                                                <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#content_quickview"><i
                                                        class="icon an an-search-l"></i>
                                                    <span class="tooltip-label top">Quick View</span></a>
                                            </li>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <li>
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                        class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label top">Add To Wishlist</span></a>
                                            </li>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <li>
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                                        class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label top">Add to Compare</span></a>
                                            </li>
                                            <!--End Compare Button-->
                                        </ul>
                                    </div>
                                    <!--End Product Button-->

                                    <!-- Product Quickshop Form -->
                                    <div class="quickshop-content d-flex-center" data-bs-scroll="true"
                                        data-bs-backdrop="false" tabindex="-1" id="pro-quickshop1">
                                        <button type="button"
                                            class="btn-close text-reset ms-auto position-absolute top-0 end-0 m-1"
                                            data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        <div
                                            class="offcanvas-body quickshop-variant h-100 d-flex align-items-start align-items-sm-center">
                                            <form method="post" action="#" id="product_form_1052"
                                                class="product-form align-items-center text-center hidedropdown"
                                                accept-charset="UTF-8" enctype="multipart/form-data">
                                                <!-- Product Price -->
                                                <div class="product-single__price lh-1 mb-3 mt-0 mx-auto">
                                                    <span class="visually-hidden">Regular price</span>
                                                    <span class="product-price__sale--single">
                                                        <span class="product-price-old-price d-none">$200.00</span><span
                                                            class="product-price__price product-price__sale0">$199.00</span>
                                                    </span>
                                                </div>
                                                <!-- End Product Price -->
                                                <!-- Swatches Color -->
                                                <div class="swatches-image swatch clearfix mb-3 swatch-0 option1"
                                                    data-option-index="0">
                                                    <div class="product-form__item">
                                                        <label class="label d-flex justify-content-center">Color:<span
                                                                class="required d-none">*</span><span
                                                                class="slVariant ms-1 fw-bold">Black</span></label>
                                                        <ul
                                                            class="swatches d-flex-justify-center list-unstyled m-0 clearfix">
                                                            <li
                                                                class="swatch-element rounded-0 color gray available active">
                                                                <label class="swatchLbl rounded-0 color small gray"
                                                                    title="Gray"></label>
                                                                <span class="tooltip-label top">Gray</span>
                                                            </li>
                                                            <li data-value="Peach"
                                                                class="swatch-element rounded-0 color orange available">
                                                                <label class="swatchLbl rounded-0 color small orange"
                                                                    title="Orange"></label>
                                                                <span class="tooltip-label top">Orange</span>
                                                            </li>
                                                            <li data-value="White"
                                                                class="swatch-element rounded-0 color brown available">
                                                                <label class="swatchLbl rounded-0 color small brown"
                                                                    title="Brown"></label>
                                                                <span class="tooltip-label top">Brown</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- End Swatches Color -->
                                                <!-- Swatches Size -->
                                                <div class="swatch clearfix mb-3 swatch-1 option2" data-option-index="1">
                                                    <div class="product-form__item">
                                                        <label class="label d-flex justify-content-center">Size:<span
                                                                class="required d-none">*</span><span
                                                                class="slVariant ms-1 fw-bold">S</span></label>
                                                        <ul
                                                            class="swatches-size d-flex-justify-center list-unstyled m-0 clearfix">
                                                            <li data-value="S" class="swatch-element s available active">
                                                                <label class="swatchLbl rounded-0 medium"
                                                                    title="S">S</label><span
                                                                    class="tooltip-label">S</span>
                                                            </li>
                                                            <li data-value="M" class="swatch-element m available">
                                                                <label class="swatchLbl rounded-0 medium"
                                                                    title="M">M</label><span
                                                                    class="tooltip-label">M</span>
                                                            </li>
                                                            <li data-value="L" class="swatch-element l available">
                                                                <label class="swatchLbl rounded-0 medium"
                                                                    title="L">L</label><span
                                                                    class="tooltip-label">L</span>
                                                            </li>
                                                            <li data-value="XL" class="swatch-element xl available">
                                                                <label class="swatchLbl rounded-0 medium"
                                                                    title="XL">XL</label><span
                                                                    class="tooltip-label">XL</span>
                                                            </li>
                                                            <li data-value="XS" class="swatch-element xs soldout">
                                                                <label class="swatchLbl rounded-0 medium"
                                                                    title="XS">XS</label><span
                                                                    class="tooltip-label">XS</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- End Swatches Size -->
                                                <!-- Product Action -->
                                                <div class="product-form-submit mx-auto">
                                                    <button type="submit" name="add"
                                                        class="btn rounded product-form__cart-submit btn-small px-3">
                                                        <span>Add to cart</span>
                                                    </button>
                                                    <button type="submit" name="add"
                                                        class="btn rounded product-form__sold-out btn-small px-3 d-none"
                                                        disabled="disabled">
                                                        Sold out
                                                    </button>
                                                    <button type="button" name="buy"
                                                        class="btn rounded btn-outline-primary proceed-to-checkout btn-small px-3 d-none">
                                                        Buy it now
                                                    </button>
                                                </div>
                                                <!-- End Product Action -->
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Product Quickshop Form -->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name text-uppercase">
                                        <a href="product-layout1.html">Mini Sleev Top</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">$199.00</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star"></i>
                                        <span class="caption hidden ms-2">8 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant-->
                                    <ul class="swatches">
                                        <li class="swatch medium radius black">
                                            <span class="tooltip-label">Black</span>
                                        </li>
                                        <li class="swatch medium radius navy">
                                            <span class="tooltip-label">Navy</span>
                                        </li>
                                        <li class="swatch medium radius purple">
                                            <span class="tooltip-label">Purple</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                                        class="icon hidden an an-cart-l"></i>Select
                                                    Options</a>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-3.jpg"
                                            src="assets/images/products/product-3.jpg" alt="image" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-3-1.jpg"
                                            src="assets/images/products/product-3-1.jpg" alt="image" title="" />
                                        <!-- End hover image -->
                                    </a>
                                    <!--End Product Image-->
                                    <!--Product label-->
                                    <div class="product-labels">
                                        <span class="lbl pr-label1 rounded">New</span>
                                    </div>
                                    <!--Product label-->

                                    <!--Product Button-->
                                    <div class="button-set style0 d-none d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li>
                                                <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                    href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                    <span class="tooltip-label top">Add to Cart</span></a>
                                            </li>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <li>
                                                <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#content_quickview"><i
                                                        class="icon an an-search-l"></i>
                                                    <span class="tooltip-label top">Quick View</span></a>
                                            </li>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <li>
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                        class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label top">Add To Wishlist</span></a>
                                            </li>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <li>
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                                        class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label top">Add to Compare</span></a>
                                            </li>
                                            <!--End Compare Button-->
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name text-uppercase">
                                        <a href="product-layout1.html">Ditsy Floral Dress</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">$99.00</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star-o"></i>
                                        <span class="caption hidden ms-2">12 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant-->
                                    <ul class="swatches">
                                        <li class="swatch medium radius red">
                                            <span class="tooltip-label">red</span>
                                        </li>
                                        <li class="swatch medium radius orange">
                                            <span class="tooltip-label">orange</span>
                                        </li>
                                        <li class="swatch medium radius yellow">
                                            <span class="tooltip-label">yellow</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                                        class="icon hidden an an-cart-l"></i>Add To
                                                    Cart</a>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-4.jpg"
                                            src="assets/images/products/product-4.jpg" alt="image" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-4-1.jpg"
                                            src="assets/images/products/product-4-1.jpg" alt="image" title="" />
                                        <!-- End hover image -->
                                        <span class="sold-out"><span class="rounded">Sold
                                                out</span></span>
                                    </a>
                                    <!--End Product Image-->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name text-uppercase">
                                        <a href="product-layout1.html">Trim Button Front Blouse</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">$199.00</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star-o"></i><i class="an an-star-o"></i><i
                                            class="an an-star-o"></i>
                                        <span class="caption hidden ms-2">15 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant-->
                                    <ul class="swatches">
                                        <li class="swatch medium radius black">
                                            <span class="tooltip-label">black</span>
                                        </li>
                                        <li class="swatch medium radius navy">
                                            <span class="tooltip-label">navy</span>
                                        </li>
                                        <li class="swatch medium radius darkgreen">
                                            <span class="tooltip-label">darkgreen</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <button class="btn btn-addto-cart soldOutBtn" type="button">
                                                    <i class="icon hidden an an-cart-l"></i>Sold Out
                                                </button>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-5.jpg"
                                            src="assets/images/products/product-5.jpg" alt="image" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-5-1.jpg"
                                            src="assets/images/products/product-5-1.jpg" alt="image" title="" />
                                        <!-- End hover image -->
                                    </a>
                                    <!--End Product Image-->

                                    <!--Product Button-->
                                    <div class="button-set style0 d-none d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li>
                                                <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                    href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                    <span class="tooltip-label top">Add to Cart</span></a>
                                            </li>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <li>
                                                <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#content_quickview"><i
                                                        class="icon an an-search-l"></i>
                                                    <span class="tooltip-label top">Quick View</span></a>
                                            </li>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <li>
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                        class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label top">Add To Wishlist</span></a>
                                            </li>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <li>
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                                        class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label top">Add to Compare</span></a>
                                            </li>
                                            <!--End Compare Button-->
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name text-uppercase">
                                        <a href="product-layout1.html">Bodysuit Black</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">$149.00</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star-o"></i>
                                        <span class="caption hidden ms-2">4 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant-->
                                    <ul class="swatches">
                                        <li class="swatch medium radius black">
                                            <span class="tooltip-label">black</span>
                                        </li>
                                        <li class="swatch medium radius maroon">
                                            <span class="tooltip-label">maroon</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                                        class="icon hidden an an-cart-l"></i>Add To
                                                    Cart</a>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-6.jpg"
                                            src="assets/images/products/product-6.jpg" alt="image" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-6-1.jpg"
                                            src="assets/images/products/product-6-1.jpg" alt="image" title="" />
                                        <!-- End hover image -->
                                    </a>
                                    <!--End Product Image-->
                                    <!--Product Button-->
                                    <div class="button-set style0 d-none d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li>
                                                <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                    href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                    <span class="tooltip-label top">Add to Cart</span></a>
                                            </li>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <li>
                                                <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#content_quickview"><i
                                                        class="icon an an-search-l"></i>
                                                    <span class="tooltip-label top">Quick View</span></a>
                                            </li>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <li>
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                        class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label top">Add To Wishlist</span></a>
                                            </li>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <li>
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                                        class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label top">Add to Compare</span></a>
                                            </li>
                                            <!--End Compare Button-->
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Sunset Sleep Scarf Top</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">$99.01</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star-o"></i><i
                                            class="an an-star-o"></i><i class="an an-star-o"></i><i
                                            class="an an-star-o"></i>
                                        <span class="caption hidden ms-2">10 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant-->
                                    <ul class="swatches">
                                        <li class="swatch medium radius black">
                                            <span class="tooltip-label">black</span>
                                        </li>
                                        <li class="swatch medium radius navy">
                                            <span class="tooltip-label">navy</span>
                                        </li>
                                        <li class="swatch medium radius darkgreen">
                                            <span class="tooltip-label">darkgreen</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                                        class="icon hidden an an-cart-l"></i>Add To
                                                    Cart</a>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-7.jpg"
                                            src="assets/images/products/product-7.jpg" alt="image" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-7-1.jpg"
                                            src="assets/images/products/product-7-1.jpg" alt="image" title="" />
                                        <!-- End hover image -->
                                    </a>
                                    <!--End Product Image-->
                                    <!--Product label-->
                                    <div class="product-labels">
                                        <span class="lbl pr-label1">New</span>
                                    </div>
                                    <!--Product label-->

                                    <!--Product Button-->
                                    <div class="button-set style0 d-none d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li>
                                                <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                    href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                    <span class="tooltip-label top">Add to Cart</span></a>
                                            </li>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <li>
                                                <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#content_quickview"><i
                                                        class="icon an an-search-l"></i>
                                                    <span class="tooltip-label top">Quick View</span></a>
                                            </li>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <li>
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                        class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label top">Add To Wishlist</span></a>
                                            </li>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <li>
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                                        class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label top">Add to Compare</span></a>
                                            </li>
                                            <!--End Compare Button-->
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Button Up Top Black</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">$99.01</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star-o"></i><i class="an an-star-o"></i>
                                        <i class="an an-star-o"></i>
                                        <span class="caption hidden ms-2">13 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant -->
                                    <ul class="image-swatches swatches">
                                        <li class="radius red medium">
                                            <span class="swacth-btn"></span><span class="tooltip-label">Red</span>
                                        </li>
                                        <li class="radius yellow medium">
                                            <span class="swacth-btn"></span><span class="tooltip-label">Yellow</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                                        class="icon hidden an an-cart-l"></i>Add To
                                                    Cart</a>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-8.jpg"
                                            src="assets/images/products/product-8.jpg" alt="image" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-8-1.jpg"
                                            src="assets/images/products/product-8-1.jpg" alt="image" title="" />
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels">
                                            <span class="lbl on-sale">50% Off</span>
                                        </div>
                                        <!-- End product label -->
                                    </a>
                                    <!--End Product Image-->

                                    <!--Product Button-->
                                    <div class="button-set style0 d-none d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li>
                                                <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                    href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                    <span class="tooltip-label top">Add to Cart</span></a>
                                            </li>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <li>
                                                <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#content_quickview"><i
                                                        class="icon an an-search-l"></i>
                                                    <span class="tooltip-label top">Quick View</span></a>
                                            </li>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <li>
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                        class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label top">Add To Wishlist</span></a>
                                            </li>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <li>
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                                        class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label top">Add to Compare</span></a>
                                            </li>
                                            <!--End Compare Button-->
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Martha Knit Top</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="old-price">$199.00</span>
                                        <span class="price">$219.00</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star"></i><i class="an an-star"></i>
                                        <i class="an an-star-o"></i>
                                        <span class="caption hidden ms-2">9 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant -->
                                    <ul class="image-swatches swatches">
                                        <li class="radius blue medium">
                                            <span class="swacth-btn"></span><span class="tooltip-label">Blue</span>
                                        </li>
                                        <li class="radius pink medium">
                                            <span class="swacth-btn"></span><span class="tooltip-label">Pink</span>
                                        </li>
                                        <li class="radius red medium">
                                            <span class="swacth-btn"></span><span class="tooltip-label">Red</span>
                                        </li>
                                        <li class="radius yellow medium">
                                            <span class="swacth-btn"></span><span class="tooltip-label">Yellow</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                                        class="icon hidden an an-cart-l"></i>Add To
                                                    Cart</a>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-9-2.jpg"
                                            src="assets/images/products/product-9-2.jpg" alt="image" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-9-1.jpg"
                                            src="assets/images/products/product-9-1.jpg" alt="image" title="" />
                                        <!-- End hover image -->
                                    </a>
                                    <!--End Product Image-->

                                    <!--Countdown Timer-->
                                    <div class="saleTime" data-countdown="2024/10/01"></div>
                                    <!--End Countdown Timer-->

                                    <!--Product Button-->
                                    <div class="button-set style0 d-none d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li>
                                                <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                    href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                    <span class="tooltip-label top">Add to Cart</span></a>
                                            </li>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <li>
                                                <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#content_quickview"><i
                                                        class="icon an an-search-l"></i>
                                                    <span class="tooltip-label top">Quick View</span></a>
                                            </li>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <li>
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                        class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label top">Add To Wishlist</span></a>
                                            </li>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <li>
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                                        class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label top">Add to Compare</span></a>
                                            </li>
                                            <!--End Compare Button-->
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Long Sleeve T-shirts</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">$199.01</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star"></i>
                                        <span class="caption hidden ms-2">20 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant-->
                                    <ul class="swatches">
                                        <li class="swatch medium radius purple">
                                            <span class="tooltip-label">Purple</span>
                                        </li>
                                        <li class="swatch medium radius black">
                                            <span class="tooltip-label">Black</span>
                                        </li>
                                        <li class="swatch medium radius navy">
                                            <span class="tooltip-label">Navy</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                                        class="icon hidden an an-cart-l"></i>Add To
                                                    Cart</a>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-10.jpg"
                                            src="assets/images/products/product-10.jpg" alt="image" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-10-1.jpg"
                                            src="assets/images/products/product-10-1.jpg" alt="image" title="" />
                                        <!-- End hover image -->
                                    </a>
                                    <!--End Product Image-->

                                    <!--Product Button-->
                                    <div class="button-set style0 d-none d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li>
                                                <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                    href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                    <span class="tooltip-label top">Add to Cart</span></a>
                                            </li>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <li>
                                                <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#content_quickview"><i
                                                        class="icon an an-search-l"></i>
                                                    <span class="tooltip-label top">Quick View</span></a>
                                            </li>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <li>
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                        class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label top">Add To Wishlist</span></a>
                                            </li>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <li>
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                                        class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label top">Add to Compare</span></a>
                                            </li>
                                            <!--End Compare Button-->
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Backpack With Contrast Bow</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">$39.01</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star-o"></i>
                                        <span class="caption hidden ms-2">2 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant-->
                                    <ul class="swatches">
                                        <li class="swatch medium radius black">
                                            <span class="tooltip-label">black</span>
                                        </li>
                                        <li class="swatch medium radius maroon">
                                            <span class="tooltip-label">maroon</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                                        class="icon hidden an an-cart-l"></i>Add To
                                                    Cart</a>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-11.jpg"
                                            src="assets/images/products/product-11.jpg" alt="image" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-11-1.jpg"
                                            src="assets/images/products/product-11-1.jpg" alt="image" title="" />
                                        <!-- End hover image -->
                                    </a>
                                    <!--End Product Image-->

                                    <!--Product Button-->
                                    <div class="button-set style0 d-none d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li>
                                                <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                    href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                    <span class="tooltip-label top">Add to Cart</span></a>
                                            </li>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <li>
                                                <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#content_quickview"><i
                                                        class="icon an an-search-l"></i>
                                                    <span class="tooltip-label top">Quick View</span></a>
                                            </li>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <li>
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                        class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label top">Add To Wishlist</span></a>
                                            </li>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <li>
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                                        class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label top">Add to Compare</span></a>
                                            </li>
                                            <!--End Compare Button-->
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Puffer Jacket</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">$89.00</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star-o"></i>
                                        <span class="caption hidden ms-2">6 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant -->
                                    <ul class="image-swatches swatches">
                                        <li class="radius blue medium">
                                            <span class="swacth-btn"></span><span class="tooltip-label">Blue</span>
                                        </li>
                                        <li class="radius pink medium">
                                            <span class="swacth-btn"></span><span class="tooltip-label">Pink</span>
                                        </li>
                                        <li class="radius yellow medium">
                                            <span class="swacth-btn"></span><span class="tooltip-label">Yellow</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                                        class="icon hidden an an-cart-l"></i>Add To
                                                    Cart</a>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-12.jpg"
                                            src="assets/images/products/product-12.jpg" alt="" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-12-1.jpg"
                                            src="assets/images/products/product-12-1.jpg" alt="" title="" />
                                        <!-- End hover image -->
                                    </a>
                                    <!--End Product Image-->

                                    <div class="button-set style0 d-none d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li>
                                                <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                    href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                    <span class="tooltip-label top">Add to Cart</span></a>
                                            </li>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <li>
                                                <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#content_quickview"><i
                                                        class="icon an an-search-l"></i>
                                                    <span class="tooltip-label top">Quick View</span></a>
                                            </li>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <li>
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                        class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label top">Add To Wishlist</span></a>
                                            </li>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <li>
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                                        class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label top">Add to Compare</span></a>
                                            </li>
                                            <!--End Compare Button-->
                                        </ul>
                                    </div>
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Long Sleeve T-shirts</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">$199.00</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star"></i>
                                        <span class="caption hidden ms-2">20 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant-->
                                    <ul class="swatches">
                                        <li class="swatch medium radius black">
                                            <span class="tooltip-label">Black</span>
                                        </li>
                                        <li class="swatch medium radius purple">
                                            <span class="tooltip-label">Purple</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                                        class="icon hidden an an-cart-l"></i>Add To
                                                    Cart</a>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-13.jpg"
                                            src="assets/images/products/product-13.jpg" alt="" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-13-1.jpg"
                                            src="assets/images/products/product-13-1.jpg" alt="" title="" />
                                        <!-- End hover image -->
                                    </a>
                                    <!--End Product Image-->
                                    <!--Product label-->
                                    <div class="product-labels">
                                        <span class="lbl pr-label1">HOT</span>
                                    </div>
                                    <!--Product label-->

                                    <!--Product Button-->
                                    <div class="button-set style0 d-none d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li>
                                                <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                    href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                    <span class="tooltip-label top">Add to Cart</span></a>
                                            </li>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <li>
                                                <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#content_quickview"><i
                                                        class="icon an an-search-l"></i>
                                                    <span class="tooltip-label top">Quick View</span></a>
                                            </li>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <li>
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                        class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label top">Add To Wishlist</span></a>
                                            </li>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <li>
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                                        class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label top">Add to Compare</span></a>
                                            </li>
                                            <!--End Compare Button-->
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Stand Collar Slim Shirt</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">$399.00</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star-o"></i><i class="an an-star-o"></i><i
                                            class="an an-star-o"></i>
                                        <span class="caption hidden ms-2">19 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant-->
                                    <ul class="swatches">
                                        <li class="swatch medium radius red">
                                            <span class="tooltip-label">red</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                                        class="icon hidden an an-cart-l"></i>Add To
                                                    Cart</a>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-14.jpg"
                                            src="assets/images/products/product-14.jpg" alt="" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-14-1.jpg"
                                            src="assets/images/products/product-14-1.jpg" alt="" title="" />
                                        <!-- End hover image -->
                                    </a>
                                    <!--End Product Image-->

                                    <!--Product Button-->
                                    <div class="button-set style0 d-none d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li>
                                                <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                    href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                    <span class="tooltip-label top">Add to Cart</span></a>
                                            </li>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <li>
                                                <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#content_quickview"><i
                                                        class="icon an an-search-l"></i>
                                                    <span class="tooltip-label top">Quick View</span></a>
                                            </li>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <li>
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                        class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label top">Add To Wishlist</span></a>
                                            </li>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <li>
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                                        class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label top">Add to Compare</span></a>
                                            </li>
                                            <!--End Compare Button-->
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Martha Knit Top</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="old-price">$199.00</span>
                                        <span class="price">$219.00</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star"></i><i class="an an-star"></i><i
                                            class="an an-star-o"></i>
                                        <span class="caption hidden ms-2">24 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant -->
                                    <ul class="swatches">
                                        <li class="swatch medium radius green">
                                            <span class="tooltip-label">Green</span>
                                        </li>
                                        <li class="swatch medium radius orange">
                                            <span class="tooltip-label">Orange</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                                        class="icon hidden an an-cart-l"></i>Add To
                                                    Cart</a>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="product-layout1.html" class="product-img">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload"
                                            data-src="assets/images/products/product-15.jpg"
                                            src="assets/images/products/product-15.jpg" alt="" title="" />
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"
                                            data-src="assets/images/products/product-15-1.jpg"
                                            src="assets/images/products/product-15-1.jpg" alt="" title="" />
                                        <!-- End hover image -->
                                    </a>
                                    <!--End Product Image-->
                                    <!--Product Button-->
                                    <div class="button-set style0 d-none d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li>
                                                <a class="btn-icon btn cartIcon pro-addtocart-popup"
                                                    href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i>
                                                    <span class="tooltip-label top">Add to Cart</span></a>
                                            </li>
                                            <!--End Cart Button-->
                                            <!--Quick View Button-->
                                            <li>
                                                <a class="btn-icon quick-view-popup quick-view" href="javascript:void(0)"
                                                    data-toggle="modal" data-target="#content_quickview"><i
                                                        class="icon an an-search-l"></i>
                                                    <span class="tooltip-label top">Quick View</span></a>
                                            </li>
                                            <!--End Quick View Button-->
                                            <!--Wishlist Button-->
                                            <li>
                                                <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                        class="icon an an-heart-l"></i>
                                                    <span class="tooltip-label top">Add To Wishlist</span></a>
                                            </li>
                                            <!--End Wishlist Button-->
                                            <!--Compare Button-->
                                            <li>
                                                <a class="btn-icon compare add-to-compare" href="compare-style2.html"><i
                                                        class="icon an an-sync-ar"></i>
                                                    <span class="tooltip-label top">Add to Compare</span></a>
                                            </li>
                                            <!--End Compare Button-->
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name">
                                        <a href="product-layout1.html">Weave Hoodie Sweatshirt</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">$199.00</span>
                                    </div>
                                    <!--End Product Price-->
                                    <!--Product Review-->
                                    <div class="product-review d-flex align-items-center justify-content-center">
                                        <i class="an an-star"></i><i class="an an-star-o"></i><i
                                            class="an an-star-o"></i><i class="an an-star-o"></i><i
                                            class="an an-star-o"></i>
                                        <span class="caption hidden ms-2">2 reviews</span>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Sort Description-->
                                    <p class="hidden sort-desc">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s
                                        specimen book...
                                    </p>
                                    <!--End Sort Description-->
                                    <!--Color Variant-->
                                    <ul class="swatches">
                                        <li class="swatch medium radius darkgreen">
                                            <span class="tooltip-label">darkgreen</span>
                                        </li>
                                    </ul>
                                    <!--End Color Variant-->
                                    <!-- Product Button -->
                                    <div class="button-action d-flex">
                                        <div class="addtocart-btn">
                                            <form class="addtocart" action="#" method="post">
                                                <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i
                                                        class="icon hidden an an-cart-l"></i>Add To
                                                    Cart</a>
                                            </form>
                                        </div>
                                        <div class="quickview-btn">
                                            <a class="btn btn-icon quick-view quick-view-popup" href="javascript:void(0)"
                                                data-toggle="modal" data-target="#content_quickview"><i
                                                    class="icon an an-search-l"></i>
                                                <span class="tooltip-label top">Quick View</span></a>
                                        </div>
                                        <div class="wishlist-btn">
                                            <a class="btn btn-icon wishlist add-to-wishlist" href="my-wishlist.html"><i
                                                    class="icon an an-heart-l"></i>
                                                <span class="tooltip-label top">Add To Wishlist</span></a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="btn btn-icon compare add-to-compare" href="compare.html"><i
                                                    class="icon an an-sync-ar"></i>
                                                <span class="tooltip-label top">Add to Compare</span></a>
                                        </div>
                                    </div>
                                    <!-- End Product Button -->
                                </div>
                                <!--End Product Details-->
                            </div>
                        </div>
                    </div>
                    <!--End Product Grid-->

                    <!--Pagination Classic-->
                    <hr class="clear" />
                    <div class="pagination">
                        <ul>
                            <li class="prev">
                                <a href="#"><i class="icon align-middle an an-caret-left" aria-hidden="true"></i></a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">5</a></li>
                            <li class="next">
                                <a href="#"><i class="icon align-middle an an-caret-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--End Pagination Classic-->

                    <!-- Collection Description-->
                    <div class="collection-description mt-4 pt-2">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's
                            standard reader dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make
                            a type specimen the book. It has survived not only five
                            centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged.
                        </p>
                    </div>
                    <!--End Collection Description-->
                </div>
                <!--End Main Content-->
            </div>
        </div>
        </div>
        <!--End Body Container-->

        <!--Footer-->

        <!--End Footer-->

        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon an an-chevron-up"></i></span>
        <!--End Scoll Top-->

        <!--MiniCart Drawer-->

        <!--End MiniCart Drawer-->
        <div class="modalOverly"></div>

        <!--Quickview Popup-->

        <!--End Quickview Popup-->

        <!--Addtocart Added Popup-->

        <!-- End Addtocart Added Popup-->

        <!-- Including Jquery -->
        <script src="{{ asset('assets/js/vendor/jquery-min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
        <!--Including Javascript-->
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
        </div>
        <!--End Page Wrapper-->
    </body>

    <!-- Mirrored from template.annimexweb.com/optimal/shop-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 May 2022 14:58:26 GMT -->

    </html>
