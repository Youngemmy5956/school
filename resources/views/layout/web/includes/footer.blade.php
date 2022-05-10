<div class="footer footer-1">
    <div class="footer-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center about-col mb-4">
                    <img src="{{asset('assets/images/footer-logo.png')}}" alt="Optimal" class="mb-3" />
                    <p>55 Gallaxy Enque, 2568 steet, 23568 NY</p>
                    <p class="mb-0 mb-md-3">
                        Phone: (440) 123 456 7890 | Email:
                        <a href="mailto:info@example.com">info@example.com</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links">
                    <h4 class="h4">Informations</h4>
                    <ul>
                        <li><a href="{{route('my-account')}}">My Account</a></li>
                        <li><a href="{{route('aboutus-style1')}}">About us</a></li>
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('privacy-policy')}}">Privacy policy</a></li>
                        <li><a href="#">Terms &amp; condition</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                    <h4 class="h4">Quick Shop</h4>
                    <ul>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Kids</a></li>
                        <li><a href="#">Sportswear</a></li>
                        <li><a href="#">Sale</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links">
                    <h4 class="h4">Customer Services</h4>
                    <ul>
                        <li><a href="#">Request Personal Data</a></li>
                        <li><a href="{{route('faqs-style1')}}">FAQ's</a></li>
                        <li><a href="{{route('contact-style1')}}">Contact Us</a></li>
                        <li><a href="#">Orders and Returns</a></li>
                        <li><a href="#">Support Center</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 newsletter-col">
                    <div class="display-table pt-md-3 pt-lg-0">
                        <div class="display-table-cell footer-newsletter">
                            <form action="#" method="post">
                                <label class="h4">NEWSLETTER SIGN UP</label>
                                <p>
                                    Enter Your Email To Receive Daily News And Get 20% Off
                                    Coupon For All Items.
                                </p>
                                <div class="input-group">
                                    <input type="email"
                                        class="brounded-start input-group__field newsletter-input mb-0"
                                        name="EMAIL" value="" placeholder="Email address" required />
                                    <span class="input-group__btn">
                                        <button type="submit" class="btn newsletter__submit rounded-end"
                                            name="commit" id="Subscribe">
                                            <i class="an an-envelope-l"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="list-inline social-icons mt-3 pt-1">
                        <li class="list-inline-item">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"><i
                                    class="an an-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"><i
                                    class="an an-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinterest"><i
                                    class="an an-pinterest-p" aria-hidden="true"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram"><i
                                    class="an an-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="TikTok"><i
                                    class="an an-tiktok" aria-hidden="true"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp"><i
                                    class="an an-whatsapp" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom clearfix">
        <div class="container">
            <div class="d-flex-center flex-column justify-content-md-between flex-md-row-reverse">
                <img src="{{assset('assets/images/payment.png')}}" alt="Paypal Visa Payments" />
                <div class="copytext text-uppercase">
                    &copy; 2022 Optimal. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
