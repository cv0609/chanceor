@extends('front_end.layout.main')
@section('title','Signup')
@section('content')
<!-- Login Page Form Section Start -->
<section class="login_signup_form">
    <div class="container">
        <div class="login-signup-wrapper">
            <div class="form-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="login_signup_page_image"></div>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ route('register.post') }}" method="POST" id="login-signup">
                            @csrf
                            <h3 class="text-center">Sign Up</h3>
                            @if(Session::has('success'))
                            <span class="alert alert-success text-center">{{ Session::get('success') }}</span>
                            @endif
                            <fieldset>
                                <input placeholder="Your Name" type="text" tabindex="1" name="first_name" id="name" value="{{ old('first_name') }}">
                                @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </fieldset>
                            <fieldset>
                                <input  name="last_name" placeholder="Last Name" type="text" tabindex="2" id="last-name" value="{{ old('last_name') }}" autofocus>
                                @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </fieldset>
                            <fieldset>
                                <input placeholder="Enter Your Email" type="email" tabindex="3" name="email" placeholder="Email"  id="email" value="{{ old('email') }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </fieldset>
                            <fieldset>
                                <input placeholder="Phone Number (Optional)" type="number" tabindex="4"  name="phone" id="Phone" value="{{ old('phone') }}">
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </fieldset>
                            <fieldset>
                                <input placeholder="Enter Password" type="password" tabindex="5" name="password" placeholder="Password" id="password-field">
                                @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </fieldset>
                            <fieldset>
                                <input placeholder="Re-enter Password" type="password" tabindex="6" name="password_confirmation" id="con_password">
                            </fieldset>

                            <fieldset>
                                <button name="submit" type="submit" id="signup-submit" data-submit="...Sending">Sign
                                    Up</button>
                            </fieldset>
                            <p class="jump-text">
                                Already have an account? <a href="{{ route('login') }}">Login</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Page Form Section End -->
@endsection

@section('custom-script')

<script>
    $(document).ready(function () {
        var response = 'You have to complete the CAPTCHA.';
        @if($errors->has('g-recaptcha-response'))
        $('#captchaModal').modal('show');
        $('#cap-message').text(response);
        @endif
    });

</script>


@endsection
