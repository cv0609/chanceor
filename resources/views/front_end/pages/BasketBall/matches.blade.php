@extends('front_end.layout.main')
@section('title','matches')
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
                        Matches
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->

<!-- Leagues Content Section Start -->
<section class="basket_leagues matches">
    <div class="container">
        <div class="basket_leagues-inner">
            <div class="back-btn">
                <a href="{{ route('leagues') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#fff">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                    </svg>
                </a>
            </div>
            <h2>{{ date('Y').'-'.(date('Y') + 1) }} Season</h2>

            <div class="team-view-sec">

            </div>
            <div class="basket_leagues-inner-content">
                <div class="matches-table">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Team</th>
                                <th scope="col">Matches Info</th>
                                <th scope="col">Team</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($matches as $key => $match)

                            <tr class="matche-main" data-fixture-id="{{ $match->id}}">
                                <td class="match-team-logo">
                                    <div class="match-team-inner">
                                    <img src="{{$match->home_team_logo}}" alt="team-logo-3">

                                    </div>
                                    <h6>{{$match->home_team_name}}</h6>
                                    <!-- <a href="matches-details"></a> -->

                                </td>
                                <td>
                                <h6>{{$match->venue_name}}</h6>
                                       <p>{{$match->venue_city}}</p>
                                       <span>{{ date('Y-m-d h:i a',strtotime($match->fixture_date))}}</span>

                                </td>
                                <td class="match-team-logo">
                                    <div class="match-team-inner">
                                    <img src="{{$match->away_team_logo}}" alt="team-logo-2">

                                    </div>
                                    <h6>{{$match->away_team_name}}</h6>
                                    <!-- <a href="matches-details"></a> -->
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Leagues Content Section End -->


@endsection

@section('custom-script')
<script>
    $(document).ready(function () {
        $(".matche-main").on('click', function () {
            var matcheId = $(this).data('fixture-id'); // Retrieve the match ID dynamically

            // Define the URL for redirection and replace the placeholder with the actual match ID
            var url = "{{ route('matche-detail', [':matcheId']) }}";
            url = url.replace(':matcheId', matcheId); // Replace placeholder with the actual match ID

            // Redirect to the dynamic URL
            window.location.href = url;
        });
    });

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    let table = new DataTable('#myTable');

</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        lazyLoading();
    });

    $(document).ready(function () {

        $(document).on('click', '.dt-paging-button', function () {
            lazyLoading();
        });

        $('.dt-input').on('keyup change', function () {
            lazyLoading();
        });

    });

    function lazyLoading() {

        let lazyImages = [].slice.call(document.querySelectorAll("img.lazy-load"));

        if ("IntersectionObserver" in window) {
            let lazyImageObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        lazyImage.src = lazyImage.dataset.src;
                        lazyImage.classList.remove("lazy-load");
                        lazyImageObserver.unobserve(lazyImage);
                    }
                });
            });

            lazyImages.forEach(function (lazyImage) {
                lazyImageObserver.observe(lazyImage);
            });
        } else {
            // Fallback for older browsers
            lazyImages.forEach(function (lazyImage) {
                lazyImage.src = lazyImage.dataset.src;
            });
        }
    }

</script>

@endsection
