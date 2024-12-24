@extends('front_end.layout.main')
@section('title','My matches')
@section('content')
<!--Leagues Pages Banner Section Start -->
<section class="pages-banner leagues-pages  bg-cover bg-no-repeat">
    <div class="container">
        <div class="banner-content">
            <ul class="leagues-ul">
                <li class="inline-list home-list">
                    <h3>
                        <a href="./">Home</a>
                    </h3>
                </li>
                <li class="inline-list next-page-list">
                    <h3>
                        My Matches
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->

<!-- Leagues Content Section Start -->
<section class="basket_leagues my-matches">
    <div class="container">


        <div class="basket_leagues-inner">
            <h2>My Matches</h2>
            <div class="basket_leagues my-matches-inner-content">
                <div class="matches-table ">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Team</th>
                                <th scope="col">Match Info</th>
                                <th scope="col">Team</th>
                                <th scope="col">Score</th>
                                <th scope="col">Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="match-team-logo">
                                    <a href="match-details">
                                        <img src="assets/images/NationalBasketballAssociation.png"
                                            alt="my-matches-logo">
                                        <h6>National Basketball Association</h6>
                                    </a>
                                </td>
                                <td>
                                    <h6>Brooklyn Nets</h6>
                                    <p>Brooklyn</p>
                                    <span>2024-12-29 07:30 PM</span>
                                </td>
                                <td class="match-team-logo">

                                    <img src="assets/images/MaximumBasketballLeague.jpg" alt="my-matches-logo">
                                    <h6>Maximum Basketball League</h6>
                                </td>
                                <td class="match-score">
                                    <h4>0</h4>
                                </td>
                                <td class="match-status">
                                    <p class="win">-- </p>

                                </td>
                            </tr>

                            <tr>
                                <td class="match-team-logo">
                                    <a href="match-details">
                                        <img src="assets/images/NationalBasketballAssociation.png"
                                            alt="my-matches-logo">
                                        <h6>National Basketball Association</h6>
                                    </a>
                                </td>
                                <td>
                                    <h6>Brooklyn Nets</h6>
                                    <p>Brooklyn</p>
                                    <span>2024-12-29 07:30 PM</span>
                                </td>
                                <td class="match-team-logo">

                                    <img src="assets/images/MaximumBasketballLeague.jpg" alt="my-matches-logo">
                                    <h6>Maximum Basketball League</h6>
                                </td>
                                <td class="match-score">
                                    <h4>0</h4>
                                </td>
                                <td class="match-status">
                                    <p class="win">-- </p>

                                </td>
                            </tr>

                            <tr>
                                <td class="match-team-logo">
                                    <a href="match-details">
                                        <img src="assets/images/NationalBasketballAssociation.png"
                                            alt="my-matches-logo">
                                        <h6>National Basketball Association</h6>
                                    </a>
                                </td>
                                <td>
                                    <h6>Brooklyn Nets</h6>
                                    <p>Brooklyn</p>
                                    <span>2024-12-29 07:30 PM</span>
                                </td>
                                <td class="match-team-logo">

                                    <img src="assets/images/MaximumBasketballLeague.jpg" alt="my-matches-logo">
                                    <h6>Maximum Basketball League</h6>
                                </td>
                                <td class="match-score">
                                    <h4>0</h4>
                                </td>
                                <td class="match-status">
                                    <p class="win">-- </p>

                                </td>
                            </tr>

                            <tr>
                                <td class="match-team-logo">
                                    <a href="match-details">
                                        <img src="assets/images/NationalBasketballAssociation.png"
                                            alt="my-matches-logo">
                                        <h6>National Basketball Association</h6>
                                    </a>
                                </td>
                                <td>
                                    <h6>Brooklyn Nets</h6>
                                    <p>Brooklyn</p>
                                    <span>2024-12-29 07:30 PM</span>
                                </td>
                                <td class="match-team-logo">

                                    <img src="assets/images/MaximumBasketballLeague.jpg" alt="my-matches-logo">
                                    <h6>Maximum Basketball League</h6>
                                </td>
                                <td class="match-score">
                                    <h4>0</h4>
                                </td>
                                <td class="match-status">
                                    <p class="win">-- </p>

                                </td>
                            </tr>

                            <tr>
                                <td class="match-team-logo">
                                    <a href="match-details">
                                        <img src="assets/images/NationalBasketballAssociation.png"
                                            alt="my-matches-logo">
                                        <h6>National Basketball Association</h6>
                                    </a>
                                </td>
                                <td>
                                    <h6>Brooklyn Nets</h6>
                                    <p>Brooklyn</p>
                                    <span>2024-12-29 07:30 PM</span>
                                </td>
                                <td class="match-team-logo">

                                    <img src="assets/images/MaximumBasketballLeague.jpg" alt="my-matches-logo">
                                    <h6>Maximum Basketball League</h6>
                                </td>
                                <td class="match-score">
                                    <h4>0</h4>
                                </td>
                                <td class="match-status">
                                    <p class="win">-- </p>

                                </td>
                            </tr>

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
    $(".matche-main").on('click', function () {
        var fixtureId = $(this).data('fixture-id');
        var leagueId = $(this).data('league-id');
        var url = "{{ route('profile.match-detail', [':leagueId', ':fixtureId']) }}";
        url = url.replace(':fixtureId', fixtureId).replace(':leagueId', leagueId);
        window.location.href = url;
    });

</script>

@endsection
