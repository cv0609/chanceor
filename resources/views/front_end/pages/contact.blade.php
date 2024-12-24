@extends('front_end.layout.main')
  @section('title','Contact us')
  @section('content')
<!--How To Play Banner Section Start -->
<div class="home_banner sub_pages_banner contact_us">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_box">
                    <h1>
                        Contact Us
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--How To Play Banner Section End -->


<!-- After Banner Text Section Start -->
<div class="after_banner_text_wrap py-5 text-center mt-60">
    <div class="container">
        <div class="after_banner_text">
            <p>
                At <span class="orange">Chanceor</span> , we’re committed to providing you with the best <span
                    class="orange">fantasy basketball</span>
                experience. If you have questions, need assistance, or simply want to share feedback, our
                team is here to help.
            </p>
        </div>
    </div>
</div>
<!-- After Banner Text Section End -->


<!-- Contact Us Content Section Start -->
<section class="header-pages-content-section bg-center bg-cover bg-fixed bg-no-repeat py-5 contact_us_content">
    <div class="container">
        <div class="header-pages-content">



            <div class="header-pages-cards">
                <h3>
                    Get in Touch
                </h3>
                <p>
                    <strong>
                        Email Us
                    </strong>
                </p>
                <p>
                    For all inquiries, you can reach us at:
                </p>
                <p>
                    <strong>
                        Email:
                    </strong>
                    <a href="mailto:info@chanceor.com">info@chanceor.com</a>
                </p>
                <p>
                    We aim to respond to all messages within 24–48 hours
                </p>
                <p>
                    <strong>
                        Feedback & Suggestions
                    </strong>
                </p>
                <p>
                    Your insights and ideas drive us to improve. If you have any feedback about your experience
                    on Chanceor, please don’t hesitate to share it with us.
                </p>
                <p>
                    <strong>
                        Social Media
                    </strong>
                </p>
                <p>
                    Stay connected and follow us on social media for updates, tips, and the latest news:
                </p>
                <div class="social-tags-container">
                    <a class="social-icons social-fb">
                        <div class="social-ikons fb"></div>
                    </a>
                    <a class="social-icons social-twitter">
                        <div class="social-ikons twitter"></div>
                    </a>
                    <a class="social-icons social-insta">
                        <div class="social-ikons insta">
                        </div>
                    </a>
                </div>
            </div>

            <div class="header-pages-cards">

                <h3>
                    Contact Form
                </h3>
                <p>
                    For your convenience, you can also use our contact form below to get in touch. Simply fill
                    out the required fields, and our team will get back to you as soon as possible.
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="header-pages-cards-image contact-card1-image bg-center bg-cover bg-no-repeat ">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-pages-cards-content">
                        @if(Session::has('success'))
                            <span class="alert alert-success text-center" style="width:100%;">{{ Session::get('success') }}</span>
                        @endif
                            <div class="form-wrapper">
                                <form id="contact" action="{{ route('contact.save') }}" method="post" onsubmit="return validateForm()">
                                     @csrf

                                    <fieldset>
                                        <input class="contact-form" placeholder="Enter Your Full Name" type="text"
                                            tabindex="1" name="full_name" id="full_name" minlength="2" maxlength="100" value="{{ old('full_name') }}">
                                        <p class="text-danger d-none" id="nameError"></p>
                                    </fieldset>
                                    <fieldset>
                                        <input class="contact-email" placeholder="Enter Your Email Address" type="email"
                                            tabindex="2" name="email" id="email">
                                      <p class="text-danger d-none" id="emailError"></p>
                                    </fieldset>
                                    <fieldset>
                                        <input class="contact-form" placeholder="Enter the Purpose of Your Inquiry"
                                            type="text" tabindex="3" name="subject" id="subject" minlength="3" maxlength="100" value="{{ old('subject') }}">
                                       <p class="text-danger d-none" id="subjectError"></p>
                                    </fieldset>
                                    <fieldset>
                                        <textarea name="message" id="message-text-area" class="message"
                                            placeholder="Write Your Message Here ..." required minlength="10"
                                            maxlength="1000">{{ old('message') }}</textarea>
                                     <p class="text-danger d-none" id="messageError"></p>
                                    </fieldset>
                                    <fieldset>
                                        <button type="button" id="message" class="contact-submit butn contact-btn"
                                            data-submit="...Sending">
                                            Send
                                        </button>
                                <button type="submit" class="d-none" name="contectUssubmit" id="contectUssubmit"></button>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <p>
                    We’re excited to have you as part of the Chanceor community and are dedicated to
                    ensuring your experience is seamless, enjoyable, and rewarding.
                </p>
            </div>



        </div>
    </div>
</section>
<!-- Contact Us Content Section End -->
@endsection

@section('custom-script')

<script>
    $(document).ready(function () {
        var response = 'You have to complete the CAPTCHA.';
        @if($errors->has('g-recaptcha-response'))
        $('#captchaModal').modal('show');
        $('#cap-message').text(response);
        @endif


        $('.contact-btn').on('click', function () {
            var valid = true;

            $('.text-danger').addClass('d-none').css('font-size', '15px');

            if ($('#full_name').val().trim() === '') {
                $('#nameError').removeClass('d-none').text('Full name field is required.');
                valid = false;
            }

            var email = $('#email').val().trim();

            if ($('#email').val().trim() === '') {
                $('#emailError').removeClass('d-none').text('Email field is required.');
                valid = false;
            }

            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if ($('#email').val().trim() != '' && !emailPattern.test(email)) {
                $('#emailError').removeClass('d-none').text('Please enter a valid email address.');
                valid = false;
            }

            if ($('#subject').val().trim() === '') {
                $('#subjectError').removeClass('d-none').text('Subject field is required.');
                valid = false;
            }

            if ($('#message-text-area').val().trim() === '') {
                $('#messageError').removeClass('d-none').text('Message field is required.');
                valid = false;
            }

            // if (!$('#agree').is(':checked')) {
            //     $('#agreeError').removeClass('d-none').text('You must agree to the terms.');
            //     valid = false;
            // }

            if (valid) {
                $("#contectUssubmit").click();

            }
        });





    });

</script>


@endsection
