@extends('front_end.layout.main')
@section('content')
<!--Leagues Pages Banner Section Start -->
<section class="pages-banner leagues-pages  bg-cover bg-no-repeat">
    <div class="container">
        <div class="banner-content">
            <ul class="leagues-ul">
                <li class="inline-list home-list">
                    <h3>
                        <a href="{{ route('home') }}">Home</a>
                    </h3>
                </li>
                <li class="inline-list next-page-list">
                    <h3>
                        My Profile
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->

<!-- Leagues Content Section Start -->
<section class="my-profile py-10">
    <div class="container">
        <div class="mmy-profile-inner">
            @include('front_end.pages.profile.profile-sidebar')
            <div class="col-sec">
                <div class="user-content-update">
                    <div class="">
                        <div class="tab-content tab-content-1 active">
                            <div class="user-content-box">
                              @if(Session::has('success'))
                                    <span class="alert alert-success col-md-12 text-center">{{ Session::get('success')  }}</span>
                                    @endif
                                <form action="{{ route('profile.update') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                        <div class="mb-3">
                                            <input type="text" placeholder="Name" class="form-control para" id="name"
                                                 autocomplete="off" name="first_name" value="{{ Auth::user()->first_name }}">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Lastname" class="form-control para"
                                                id="last-name" name="last_name" autocomplete="off" value="{{ Auth::user()->last_name }}">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" placeholder="E-mail" class="form-control para"
                                                id="email" autocomplete="off" name="email" value="{{ Auth::user()->email  }}">
                                        </div>
                                        <div class="mb-3">
                                            <input type="tel" placeholder="Phone Number" class="form-control para"
                                                id="Phone"  autocomplete="off" name="phone" value="{{ Auth::user()->phone  }}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Leagues Content Section End -->
@endsection
