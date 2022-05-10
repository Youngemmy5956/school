<div id="newsletter-modal" class="style1 mfp-with-anim mfp-hide">
    <div class="d-flex flex-column">
        <div class="newsltr-img d-none d-sm-none d-md-block">
            <img src="{{asset('assets/images/newsletter-img.jpg')}}" alt="image" />
        </div>
        <div class="newsltr-text text-center">
            <div class="wraptext">
                <p><b>GET THE UPDATES ABOUT LATEST TREANDS</b></p>
                <h2 class="title fw-normal mb-4">20% OFF YOUR FIRST ORDER</h2>
                <form action="#" method="post" class="mcNewsletter mb-4">
                    <div class="input-group d-flex flex-nowrap">
                        <input type="email" class="rounded-start newsletter__input" name="EMAIL" value=""
                            placeholder="Email address" required />
                        <span><button type="submit" class="btn mcNsBtn rounded-end" name="commit">
                                <span>Subscribe</span>
                            </button></span>
                    </div>
                </form>
                <div class="customCheckbox justify-content-center checkboxlink clearfix mb-3">
                    <input id="dontshow" name="newsPopup" type="checkbox" />
                    <label for="dontshow" class="pt-1">Don't show this popup again</label>
                </div>
                <p>Your information will never be shared</p>
            </div>
        </div>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
</div>
