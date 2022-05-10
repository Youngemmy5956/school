
<div id="quickView-modal" class="mfp-with-anim mfp-hide">
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3 mb-md-0">
            <!--Model thumbnail -->
            <div id="quickView" class="carousel slide">
                <!-- Image Slide carousel items -->
                <div class="carousel-inner">
                    <div class="item carousel-item active" data-bs-slide-number="0">
                        <img class="blur-up lazyload" data-src="{{asset('assets/images/products/product-5.jpg')}}"
                            src="{{asset('assets/images/products/product-5.jpg')}}" alt="image" title="" />
                    </div>
                    <div class="item carousel-item" data-bs-slide-number="1">
                        <img class="blur-up lazyload" data-src="{{asset('assets/images/products/product-5-1.jpg')}}"
                            src="{{asset('assets/images/products/product-5-1.jpg')}}" alt="image" title="" />
                    </div>
                    <div class="item carousel-item" data-bs-slide-number="2">
                        <img class="blur-up lazyload" data-src="{{asset('assets/images/products/product-5-2.jpg')}}"
                            src="{{asset('assets/images/products/product-5-2.jpg')}}" alt="image" title="" />
                    </div>
                    <div class="item carousel-item" data-bs-slide-number="3">
                        <img class="blur-up lazyload" data-src="{{asset('assets/images/products/product-5-3.jpg')}}"
                            src="{{asset('assets/images/products/product-5-3.jpg')}}" alt="image" title="" />
                    </div>
                    <div class="item carousel-item" data-bs-slide-number="4">
                        <img class="blur-up lazyload" data-src="{{asset('assets/images/products/product-5-4.jpg')}}"
                            src="{{asset('assets/images/products/product-5-4.jpg')}}" alt="image" title="" />
                    </div>
                </div>
                <!-- End Image Slide carousel items -->
                <!-- Thumbnail image -->
                <div class="model-thumbnail-img">
                    <!-- Thumbnail slide -->
                    <div class="carousel-indicators list-inline">
                        <div class="list-inline-item active" id="carousel-selector-0" data-bs-slide-to="0"
                            data-bs-target="#quickView">
                            <img class="blur-up lazyload" data-src="{{asset('assets/images/products/product-5.jpg')}}"
                                src="{{asset('assets/images/products/product-5.jpg')}}" alt="image" title="" />
                        </div>
                        <div class="list-inline-item" id="carousel-selector-1" data-bs-slide-to="1"
                            data-bs-target="#quickView">
                            <img class="blur-up lazyload" data-src="{{asset('assets/images/products/product-5-1.jpg')}}"
                                src="{{asset('assets/images/products/product-5-1.jpg')}}" alt="image" title="" />
                        </div>
                        <div class="list-inline-item" id="carousel-selector-2" data-bs-slide-to="2"
                            data-bs-target="#quickView">
                            <img class="blur-up lazyload" data-src="{{asset('assets/images/products/product-5-2.jpg')}}"
                                src="{{asset('assets/images/products/product-5-2.jpg')}}" alt="image" title="" />
                        </div>
                        <div class="list-inline-item" id="carousel-selector-3" data-bs-slide-to="3"
                            data-bs-target="#quickView">
                            <img class="blur-up lazyload" data-src="{{asset('assets/images/products/product-5-3.jpg')}}"
                                src="{{asset('assets/images/products/product-5-3.jpg')}}" alt="image" title="" />
                        </div>
                        <div class="list-inline-item" id="carousel-selector-4" data-bs-slide-to="4"
                            data-bs-target="#quickView">
                            <img class="blur-up lazyload" data-src="{{asset('assets/images/products/product-5-4.jpg')}}"
                                src="{{asset('assets/images/products/product-5-4.jpg')}}" alt="image" title="" />
                        </div>
                    </div>
                    <!-- End Thumbnail slide -->
                    <!-- Carousel arrow button -->
                    <a class="carousel-control-prev carousel-arrow" href="#quickView"
                        data-bs-target="#quickView" data-bs-slide="prev"><i
                            class="icon an-3x an an-angle-left"></i><span
                            class="visually-hidden">Previous</span></a>
                    <a class="carousel-control-next carousel-arrow" href="#quickView"
                        data-bs-target="#quickView" data-bs-slide="next"><i
                            class="icon an-3x an an-angle-right"></i><span
                            class="visually-hidden">Next</span></a>
                    <!-- End Carousel arrow button -->
                </div>
                <!-- End Thumbnail image -->
            </div>
            <!--End Model thumbnail -->
            <div class="text-center mt-3">
                <a href="product-layout1.html">VIEW MORE DETAILS</a>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
            <h2 class="product-title">Product Quick View Popup</h2>
            <div class="product-review d-flex-center mb-2">
                <div class="rating">
                    <i class="icon an an-star"></i><i class="icon an an-star"></i><i
                        class="icon an an-star"></i><i class="icon an an-star"></i><i
                        class="icon an an-star-o"></i>
                </div>
                <div class="reviews ms-2"><a href="#">5 Reviews</a></div>
            </div>
            <div class="product-info">
                <p class="product-vendor">
                    Vendor:
                    <span class="fw-normal"><a href="#" class="fw-normal">Optimal</a></span>
                </p>
                <p class="product-type">
                    Product Type: <span class="fw-normal">Tops</span>
                </p>
                <p class="product-sku">
                    SKU: <span class="fw-normal">50-ABC</span>
                </p>
            </div>
            <div class="pro-stockLbl my-2">
                <span class="d-flex-center stockLbl instock"><i class="icon an an-check-cil"></i><span> In
                        stock</span></span>
                <span class="d-flex-center stockLbl preorder d-none"><i
                        class="icon an an-clock-r"></i><span> Pre-order Now</span></span>
                <span class="d-flex-center stockLbl outstock d-none"><i class="icon an an-times-cil"></i>
                    <span>Sold out</span></span>
                <span class="d-flex-center stockLbl lowstock d-none" data-qty="15"><i
                        class="icon an an-exclamation-cir"></i><span>
                        Order now, Only <span class="items">10</span> left!</span></span>
            </div>
            <div class="pricebox">
                <span class="price old-price">$400.00</span><span
                    class="price product-price__sale">$300.00</span>
            </div>
            <div class="sort-description">
                Optimal Multipurpose Bootstrap 5 Html Template that will give you
                and your customers a smooth shopping experience which can be used
                for various kinds of stores such as fashion..
            </div>
            <form method="post" action="#" id="product_form--option" class="product-form">
                <div class="product-options d-flex-wrap">
                    <div class="swatch clearfix swatch-0 option1">
                        <div class="product-form__item">
                            <label class="label d-flex">Color:<span class="required d-none">*</span>
                                <span class="slVariant ms-1 fw-bold">Black</span></label>
                            <ul class="swatches-image swatches d-flex-wrap list-unstyled clearfix">
                                <li data-value="Black" class="swatch-element color available active">
                                    <label class="rounded swatchLbl small color black" title="Black"></label>
                                    <span class="tooltip-label top">Black</span>
                                </li>
                                <li data-value="Green" class="swatch-element color available">
                                    <label class="rounded swatchLbl small color green" title="Green"></label>
                                    <span class="tooltip-label top">Green</span>
                                </li>
                                <li data-value="Orange" class="swatch-element color available">
                                    <label class="rounded swatchLbl small color orange"
                                        title="Orange"></label>
                                    <span class="tooltip-label top">Orange</span>
                                </li>
                                <li data-value="Blue" class="swatch-element color available">
                                    <label class="rounded swatchLbl small color blue" title="Blue"></label>
                                    <span class="tooltip-label top">Blue</span>
                                </li>
                                <li data-value="Red" class="swatch-element color available">
                                    <label class="rounded swatchLbl small color red" title="Red"></label>
                                    <span class="tooltip-label top">Red</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="swatch clearfix swatch-1 option2">
                        <div class="product-form__item">
                            <label class="label">Size:<span class="required d-none">*</span>
                                <span class="slVariant ms-1 fw-bold">XS</span></label>
                            <ul class="swatches-size d-flex-center list-unstyled clearfix swatch-1 option2">
                                <li data-value="XS" class="swatch-element xs available active">
                                    <label class="swatchLbl rounded medium" title="XS">XS</label>
                                    <span class="tooltip-label">XS</span>
                                </li>
                                <li data-value="S" class="swatch-element s available">
                                    <label class="swatchLbl rounded medium" title="S">S</label>
                                    <span class="tooltip-label">S</span>
                                </li>
                                <li data-value="M" class="swatch-element m available">
                                    <label class="swatchLbl rounded medium" title="M">M</label>
                                    <span class="tooltip-label">M</span>
                                </li>
                                <li data-value="L" class="swatch-element l available">
                                    <label class="swatchLbl rounded medium" title="L">L</label>
                                    <span class="tooltip-label">L</span>
                                </li>
                                <li data-value="XL" class="swatch-element xl available">
                                    <label class="swatchLbl rounded medium" title="XL">XL</label>
                                    <span class="tooltip-label">XL</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-action d-flex-wrap w-100 mb-3 clearfix">
                        <div class="quantity">
                            <div class="qtyField rounded">
                                <a class="qtyBtn minus" href="javascript:void(0);"><i
                                        class="icon an an-minus-r" aria-hidden="true"></i></a>
                                <input type="text" name="quantity" value="1"
                                    class="product-form__input qty" />
                                <a class="qtyBtn plus" href="javascript:void(0);"><i
                                        class="icon an an-plus-l" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="add-to-cart ms-3 fl-1">
                            <button type="button" class="btn button-cart rounded">
                                <span>Add to cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="wishlist-btn d-flex-center">
                <a class="add-wishlist d-flex-center text-uppercase me-3" href="my-wishlist.html"
                    title="Add to Wishlist"><i class="icon an an-heart-l me-1"></i>
                    <span>Add to Wishlist</span></a>
                <a class="add-compare d-flex-center text-uppercase" href="compare-style1.html"
                    title="Add to Compare"><i class="icon an an-random-r me-2"></i>
                    <span>Add to Compare</span></a>
            </div>
            <!-- Social Sharing -->
            <div class="social-sharing share-icon d-flex-center mx-0 mt-3">
                <span class="sharing-lbl me-2">Share :</span>
                <a href="#" class="d-flex-center btn btn-link btn--share share-facebook"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Facebook"><i
                        class="icon an an-facebook mx-1"></i><span
                        class="share-title d-none">Facebook</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-twitter"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Tweet on Twitter"><i
                        class="icon an an-twitter mx-1"></i><span
                        class="share-title d-none">Tweet</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-pinterest"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Pin on Pinterest"><i
                        class="icon an an-pinterest-p mx-1"></i>
                    <span class="share-title d-none">Pin it</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-linkedin"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Share on Instagram"><i
                        class="icon an an-instagram mx-1"></i><span
                        class="share-title d-none">Instagram</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-whatsapp"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Share on WhatsApp"><i
                        class="icon an an-whatsapp mx-1"></i><span
                        class="share-title d-none">WhatsApp</span></a>
                <a href="#" class="d-flex-center btn btn-link btn--share share-email" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Share by Email"><i
                        class="icon an an-envelope-l mx-1"></i><span
                        class="share-title d-none">Email</span></a>
            </div>
            <!-- End Social Sharing -->
        </div>
    </div>
</div>
