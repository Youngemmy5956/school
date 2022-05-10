<div class="minicart-right-drawer modal right fade" id="minicart-drawer">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--MiniCart Empty-->
            <div id="cartEmpty"
                class="cartEmpty d-flex-justify-center flex-column text-center p-3 text-muted d-none">
                <div class="minicart-header d-flex-center justify-content-between w-100">
                    <h4 class="fs-6">Your cart (0 Items)</h4>
                    <a href="javascript:void(0);" class="close-cart" data-bs-dismiss="modal"
                        aria-label="Close"><i class="an an-times-r" aria-hidden="true"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></a>
                </div>
                <div class="cartEmpty-content mt-4">
                    <i class="icon an an-sq-bag fs-1 text-muted"></i>
                    <p class="my-3">No Products in the Cart</p>
                    <a href="category-4columns.html" class="btn btn-primary cart-btn rounded">Continue
                        shopping</a>
                </div>
            </div>
            <!--End MiniCart Empty-->

            <!--MiniCart Content-->
            <div id="cart-drawer" class="block block-cart">
                <div class="minicart-header">
                    <a href="javascript:void(0);" class="close-cart" data-bs-dismiss="modal"
                        aria-label="Close"><i class="an an-times-r" aria-hidden="true"
                            data-bs-toggle="tooltip" data-bs-placement="left" title="Close"></i></a>
                    <h4 class="fs-6">Your cart (2 Items)</h4>
                </div>
                <div class="minicart-content">
                    <ul class="clearfix">
                        <li class="item d-flex justify-content-center align-items-center">
                            <a class="product-image" href="product-layout1.html">
                                <img class="blur-up lazyload"
                                    src="{{asset('assets/images/products/cart-product-img1.jpg')}}"
                                    data-src="{{asset('assets/images/products/cart-product-img1.jpg')}}" alt="image"
                                    title="" />
                            </a>
                            <div class="product-details">
                                <a class="product-title" href="product-layout1.html">Floral Crop Top</a>
                                <div class="variant-cart">Black / XL</div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="money">$59.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="qtyDetail text-center">
                                <div class="wrapQtyBtn">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                class="icon an an-minus-r" aria-hidden="true"></i></a>
                                        <input type="text" name="quantity" value="1" class="qty" />
                                        <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                class="icon an an-plus-l" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <a href="#" class="edit-i remove"><i class="icon an an-edit-l"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                <a href="#" class="remove"><i class="an an-times-r"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                            </div>
                        </li>
                        <li class="item d-flex justify-content-center align-items-center">
                            <a class="product-image" href="product-layout1.html">
                                <img class="blur-up lazyload"
                                    src="{{asset('assets/images/products/cart-product-img2.jpg')}}"
                                    data-src="{{asset('assets/images/products/cart-product-img2.jpg')}}" alt="image"
                                    title="" />
                            </a>
                            <div class="product-details">
                                <a class="product-title" href="product-layout1.html">V Neck T-shirts</a>
                                <div class="variant-cart">Blue / XL</div>
                                <div class="priceRow">
                                    <div class="product-price">
                                        <span class="money">$199.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="qtyDetail text-center">
                                <div class="wrapQtyBtn">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                class="icon an an-minus-r" aria-hidden="true"></i></a>
                                        <input type="text" name="quantity" value="1" class="qty" />
                                        <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                class="icon an an-plus-l" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <a href="#" class="edit-i remove"><i class="icon an an-edit-l"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                <a href="#" class="remove"><i class="an an-times-r"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Remove"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="minicart-bottom">
                    <div class="shipinfo text-center mb-3 text-uppercase">
                        <p class="freeShipMsg">
                            <i class="an an-truck fs-5 me-2 align-middle"></i>SPENT
                            <b>$199.00</b> MORE FOR FREE SHIPPING
                        </p>
                    </div>
                    <div class="subtotal">
                        <span>Total:</span>
                        <span class="product-price">$93.13</span>
                    </div>
                    <a href="checkout-style1.html"
                        class="w-100 p-2 my-2 btn btn-outline-primary proceed-to-checkout rounded">Proceed to
                        Checkout</a>
                    <a href="cart-style1.html" class="w-100 btn btn-primary cart-btn rounded">View Cart</a>
                </div>
            </div>
            <!--End MiniCart Content-->
        </div>
    </div>
</div>
