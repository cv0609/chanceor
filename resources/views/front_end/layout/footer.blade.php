    <!-- Footer Start -->
    <footer class="footer py-5">
        <div class="container">
            <div class="footer-wrap">
                <div class="footer-blocks footer-disclaimer">
                    <div class="logo-bottom">
                        <a href="{{ route('home') }}"></a>
                    </div>
                </div>
                <div class="footer-blocks footer-menus">
                    <h3>
                        Menu
                    </h3>
                    <ul>
                        <li><a class="active-item" href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('how.to.play') }}">How To Play</a></li>
                        <li><a href="{{ route('about.us') }}">About Us</a></li>
                        <li><a href="{{ route('contact.us') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-blocks footer-menus">
                    <h3>
                        Useful Links
                    </h3>
                    <ul>
                        <li>
                            <a href="{{ route('personal.info') }}">
                                Personal Information Policy
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('privacy.policy') }}">
                                Privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('terms.condition') }}">
                                Terms & Conditions
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-blocks footer-socials">
                    <h3>
                        Let's Connect
                    </h3>
                    <div class="social-tags-container">
                        <a href="https://www.facebook.com/" target="__blank" class="social-icons social-fb">
                            <div class="social-ikons fb"></div>
                        </a>
                        <a href="https://x.com/" target="__blank" class="social-icons social-twitter">
                            <div class="social-ikons twitter"></div>
                        </a>
                        <a href="https://www.instagram.com/" target="__blank" class="social-icons social-insta">
                            <div class="social-ikons insta">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-ssl-wrap">
                <div class="copyright-wrap">
                    <p>
                        Copyright &copy; {{ date('Y') }} Chanceor.com All Rights Reserved.
                    </p>
                </div>
                <div class="ssl-container">
                    <div class="ssl-logo bg-center bg-contain bg-no-repeat h-100 w-100"></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
