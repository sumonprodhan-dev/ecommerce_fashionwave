<!-- footer area start here -->
<footer class="footer-area">
    <div class="footer-widget-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4">
                    <div class="single-widget about-widget">
                        <a href="{{ route('home') }}" class="footer-brand-logo mb-25"><img src="{{ asset('frontend/assets/images/logo.png') }}"
                                alt="footer-logo" /></a>
                        <p class="address-text">
                            House 24, Road 17 <br />
                            Banani, <br />
                            Dhaka
                        </p>
                        <div class="block-content mb-30">
                            <p class="contact">Call us: +123 2587 4521</p>
                            <p class="contact">Email: support@fashionwave.com</p>
                        </div>
                        <ul class="social-media">
                            <li class="social-media-item">
                                <a target="_blank" class="social-media-link" href="www.facebook.com">
                                    <i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social-media-item">
                                <a target="_blank" class="social-media-link" href="www.twitter.com">
                                    <i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="social-media-item">
                                <a target="_blank" class="social-media-link" href="www.linkedin.com">
                                    <i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="social-media-item">
                                <a target="_blank" class="social-media-link" href="www.instagram.com">
                                    <i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8 col-sm-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-widget">
                                <h3 class="widget-title">Categories</h3>
                                <ul class="widget-menu show">
                                    <li class="menu-item"><a class="menu-link" href="#">Health Category</a>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#">Women Fashion</a>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#">Men Fashion</a>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#">Electronic</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-widget">
                                <h3 class="widget-title">Brands</h3>
                                <ul class="widget-menu">
                                    <li class="menu-item"><a class="menu-link" href="#">Circle</a>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#">CodeLab</a>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#">HEXLAB</a>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="#">Kanba</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="single-widget">
                                <h3 class="widget-title">Quick Links</h3>
                                <ul class="widget-menu">
                                    <li class="menu-item"><a class="menu-link" href="faq.html">Help
                                            &amp; FAQ</a></li>
                                    <li class="menu-item"><a class="menu-link" href="terms.html">Terms of
                                            Conditions</a>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="privacy.html">Privacy
                                            Policy</a>
                                    </li>
                                    <li class="menu-item"><a class="menu-link" href="contact.html">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-widget newsletter-widget">
                        <h3 class="widget-title">Subscribe for Newsletter</h3>
                        <p class="newsletter-text">
                            Receive our latest updates about our <br> products and promotions.
                        </p>
                        <div class="newsletter-form mb-40">
                            <form id="subscribe_form" action="{{ route('subscriber') }}" name="subscribe_form"
                                method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control subscribe" id="subscribe" name="email"
                                        placeholder="Email" required />
                                    {{-- @error('email')
                                        <span style="color: red; font-size: 12px;">{{ $message }}</span>
                                    @enderror --}}
                                    <button type="submit" class="subscribe-btn">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="footer-bottom-wrap">
                Designed &amp; Developed By liveprojectacademy.com
            </div>
        </div>
    </div>
</footer>
<!-- footer area end here -->
