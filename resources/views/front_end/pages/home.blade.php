@extends('front_end.layout.main')
@section('title','Home');
@section('content')

<!-- Home Page Banner Section Start -->
<div class="home_banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner_box">
                    <h1>Chanceor</h1>
                    <h3>The New Home Of Fantasy Basketball</h3>
                    <a href="{{ asset('leagues') }}" class="butn home_leagues_btn">Play Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Home Page Banner Section End-->

<!-- Home Features Section Start -->
<section class="intro">
    <div class="container">
        <h2>Your New Basketball Focused <span class="orange">Fantasy Sports</span> Platform</h2>
        <p>Redraft, Head To Head, Private Leagues and Public Leagues</p>
        <p>Top Basketball Database. Compete, Coach, Enjoy.</p>
    </div>
</section>

<section id="features" class="features">
    <div class="container">
        <div class="feature_cont">
            <h2>Key Features</h2>

            <div class="feature">
                <div class="feature_img">
                    <div class="feature_img_inner feature_img_inner1"></div>
                </div>
                <h3>Innovative Gameplay</h3>
                <p>Our unique fantasy basketball experience goes beyond traditional platforms, with creative
                    features
                    that enhance strategy and engagement for all skill levels.</p>
            </div>
            <div class="feature">
                <div class="feature_img">
                    <div class="feature_img_inner feature_img_inner2"></div>
                </div>
                <h3>User-Friendly Interface</h3>
                <p>Chanceor is designed with simplicity in mind. Whether you're a seasoned player or new to fantasy
                    sports, our intuitive platform makes it easy to draft, manage, and compete.</p>
            </div>
            <div class="feature">
                <div class="feature_img">
                    <div class="feature_img_inner feature_img_inner3"></div>
                </div>
                <h3>Real-Time Insights</h3>
                <p>Stay ahead of the competition with real-time data, player performance analytics, and dynamic
                    updates
                    that keep you informed and ready to make winning decisions.</p>
            </div>
            <div class="feature">
                <div class="feature_img">
                    <div class="feature_img_inner feature_img_inner4"></div>
                </div>
                <h3>Completely Fair & Transparent</h3>
                <p>We prioritize fairness with clear rules, unbiased matchups, and advanced algorithms to ensure a
                    level
                    playing field for every participant.</p>
            </div>
            <div class="feature">
                <div class="feature_img">
                    <div class="feature_img_inner feature_img_inner5"></div>
                </div>
                <h3>Community & Competitions</h3>
                <p>Join a community of basketball fans and participate in a variety of competitions, from casual
                    leagues
                    to intense head-to-head challenges.</p>
            </div>
            <div class="feature">
                <div class="feature_img">
                    <div class="feature_img_inner feature_img_inner6"></div>
                </div>
                <h3>No Gambling, Pure Fun</h3>
                <p>Chanceor emphasizes skill, strategy, and fun—without promoting gambling. Play responsibly and
                    enjoy
                    the excitement of fantasy basketball in a safe environment.</p>
            </div>
        </div>
    </div>
</section>
<!-- Home Features Section End -->

<!-- Home Reviews Section Start -->
<section class="our_reviews_section py-5">
    <div class="container">
        <div class="home_reviews_wrap">

            <div>
                <div class="home_review_cards">
                    <div class="home_reviews_img">
                        <div class="home_review_img_inner home_review_img_inner1"></div>
                    </div>
                    <div class="home_reviews_content">
                        <h3>
                            The best fantasy basketball platform I’ve tried!
                        </h3>
                        <p>
                            I’ve used a lot of fantasy sites over the years, and Chanceor really stands out. The
                            interface
                            is clean, the stats are accurate, and I love the innovative scoring system. It keeps me
                            engaged all season long. Highly recommend!
                        </p>
                        <h5>
                            – Jake H., New Zealand
                        </h5>
                    </div>
                </div>
            </div>



            <div>
                <div class="home_review_cards">
                    <div class="home_reviews_img">
                        <div class="home_review_img_inner home_review_img_inner2"></div>
                    </div>
                    <div class="home_reviews_content">
                        <h3>
                            "Perfect for casual and competitive players alike."
                        </h3>
                        <p>
                            ’m not a hardcore fantasy player, but I’ve had such a great time on Chanceor. The
                            platform
                            is easy to use, even for beginners like me, but there’s still plenty of depth for more
                            serious
                            players. Great job balancing accessibility with strategy.
                        </p>
                        <h5>
                            – Simon L., United Kingdom
                        </h5>
                    </div>
                </div>
            </div>



            <div>
                <div class="home_review_cards">
                    <div class="home_reviews_img">
                        <div class="home_review_img_inner home_review_img_inner3"></div>
                    </div>
                    <div class="home_reviews_content">
                        <h3>
                            "Finally, a fair and fun fantasy experience."
                        </h3>
                        <p>
                            I’ve always been skeptical about fantasy platforms, but Chanceor won me over. The rules
                            are clear, the matchups feel fair, and I don’t feel like I’m at a disadvantage against
                            people
                            who’ve been playing for years.
                        </p>
                        <h5>
                            – Devon M., Canada
                        </h5>
                    </div>
                </div>
            </div>


            <div>
                <div class="home_review_cards">
                    <div class="home_reviews_img">
                        <div class="home_review_img_inner home_review_img_inner4"></div>
                    </div>
                    <div class="home_reviews_content">
                        <h3>
                            "Real-time updates are a game-changer!"
                        </h3>
                        <p>
                            The live data on Chanceor is amazing. I can make informed decisions mid-game and feel
                            like I’m actually managing a team. It’s also super smooth—no crashes or lag like I’ve
                            experienced elsewhere.
                        </p>
                        <h5>
                            – Liam T., Australia
                        </h5>
                    </div>
                </div>
            </div>


            <div>
                <div class="home_review_cards">
                    <div class="home_reviews_img">
                        <div class="home_review_img_inner home_review_img_inner5"></div>
                    </div>
                    <div class="home_reviews_content">
                        <h3>
                            "A great way to connect with friends."
                        </h3>
                        <p>
                            I started using Chanceor with a group of friends, and it’s been so much fun. The leagues
                            are
                            customizable, and the chat features make it feel like we’re all in the same room. It’s
                            really
                            brought us closer as a group of basketball fans.
                        </p>
                        <h5>
                            – Mark R., United States
                        </h5>
                    </div>
                </div>
            </div>


            <div>
                <div class="home_review_cards">
                    <div class="home_reviews_img">
                        <div class="home_review_img_inner home_review_img_inner6"></div>
                    </div>
                    <div class="home_reviews_content">
                        <h3>
                            "Love the focus on fun, not gambling."
                        </h3>
                        <p>
                            It’s refreshing to find a fantasy platform that’s focused on skill and fun without any
                            gambling
                            elements. Chanceor is about enjoying the game and testing your knowledge, not chasing
                            money. I feel good recommending it to anyone.
                        </p>
                        <h5>
                            – Ethan K., Australia
                        </h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Home Reviews Section End -->

<!-- Home Stats Section Start -->
<section class="stats-section">
    <div class="container">
        <div class="stats_wrap">
            <div class="row">
                <div class="col-md-4">
                    <div class="stats-item">
                        <div class="stats_icon stats_icon1">
                            <div class="stats_icon-inner stats_icon-inner1"></div>
                        </div>
                        <div class="stats-info">
                            <h3 class="stat-title">97% Recommendation Rate</h3>
                            <p class="stat-description">An overwhelming 97% of our users say they would
                                recommend
                                Chanceor
                                to
                                their friends and fellow basketball fans.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-item">
                        <div class="stats_icon stats_icon2">
                            <div class="stats_icon-inner stats_icon-inner2"></div>
                        </div>
                        <div class="stats-info">
                            <h3 class="stat-title">85% Return Rate</h3>
                            <p class="stat-description">Over 85% of users return to Chanceor season after
                                season,
                                making
                                it
                                their go-to platform for fantasy basketball.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-item">
                        <div class="stats_icon stats_icon3">
                            <div class="stats_icon-inner stats_icon-inner3"></div>
                        </div>
                        <div class="stats-info">
                            <h3 class="stat-title">Top-Rated by Fans Worldwide</h3>
                            <p class="stat-description">Users from over 20 countries consistently rate Chanceor
                                as
                                one
                                of
                                the
                                best fantasy platforms, combining fun, strategy, and fairness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Stats Section End-->

<!-- Disclaimer Section Start -->
<div class="discalimer text-center py-5">
    <div class="container">
        <div class="dis_text">
            <p>
                Chanceor is an independent platform designed for entertainment and informational purposes
                only. All statistics, player information, and projections provided are based on publicly
                available data and are not guaranteed for accuracy. Chanceor is not affiliated with,
                endorsed, or sponsored by the NBA, any professional basketball league, or any associated
                entities. Chanceor does not endorse, support, or promote gambling in any form. Participants
                are solely responsible for compliance with any applicable local laws and regulations
                regarding fantasy sports. By using Chanceor, you acknowledge that fantasy sports involve
                risk and are subject to uncertainties. Chanceor assumes no responsibility for any financial or
                reputational losses incurred while using the platform. All content and trademarks displayed
                on the site are the property of their respective owners. Unauthorized use, duplication, or
                redistribution is prohibited. For more details, please refer to our [ <a href="terms-conditions">Terms
                    of Service</a> ] and
                [ <a href="privacy-policy">Privacy Policy</a> ].
            </p>
        </div>
    </div>
</div>
<!-- Disclaimer Section End -->

@endsection

@section('custom-script')
<script>
    $(document).ready(function () {
        @if(Session::has('error'))
        var flashMessage = "<?= Session::get('error') ?>";
        $("#error-message").html(flashMessage)
        $("#errorModal").modal('show');
        @endif
    })

</script>
@endsection
