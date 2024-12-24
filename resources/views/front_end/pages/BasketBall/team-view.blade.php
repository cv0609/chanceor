@extends('front_end.layout.main')
@section('title','team view')
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
                        Team View
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->

<!-- Leagues Content Section Start -->
<section class="basket_leagues my-team-page">
    <div class="container">
        <div class="basket_leagues-inner">
            <div class="back-btn">
                <a href="{{ route('matche-detail',['matcheId'=>$myTeam[0]['dbMatchId']]) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#fff">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                    </svg>
                </a>
            </div>
            <h2>{{ date('Y').'-'.(date('Y') + 1) }} Season</h2>

            <div class="team-view-sec">
                <div class="team-view-header">
                    <h4>
                        Choose Your Captain and Vice Captain
                    </h4>
                    <ul>
                        <li>
                            <span class="c-logo"> C </span>
                            <div class="c-details">
                                <h6>Captain Gets</h6>
                                <p>2X (Double Points)</p>
                            </div>
                        </li>
                        <li>
                            <span class="c-logo"> VC </span>
                            <div class="c-details">
                                <h6>Vice-Captain Gets</h6>
                                <p>1.5X (Double Points)</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="basket_leagues-inner-content">
                <div class="team-view-table">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">team</th>
                                <th scope="col">Points</th>
                                <th scope="col">% C By</th>
                                <th scope="col">% VC By</th>

                            </tr>
                        </thead>
                        <tbody class="tbody">
                           @foreach($myTeam as $value)

                           <tr>
                                   <td class="player-dp">
                                       <img src="{{ $value['team_logo'] }}" alt="dp">
                                   </td>
                                   <td>
                                       <h6>{{ $value['player_name'] }}</h6>
                                       {{-- <span>34 pts</span> --}}
                                   </td>
                                   <td>
                                       <span class="c-logo">C</span>
                                 

                                       <p class="team_captain" data-league_id = {{ $value['league_id'] }} data-match_id = {{ $value['match_id'] }} data-team_id = {{ $value['team_id'] }} data-player_id = {{ $value['player_id'] }} data-already_captain = {{ $value['already_captain'] ?? '' }}>
                                          <button class="plus player-toggle captain-plus" data-event="cap_plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                          </button>
                                          <button class="minus player-toggle d-none captain-minus" data-event="cap_minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                          </button>
                                      </p>
                                   </td>
                                   <td>
                                       <span class="c-logo">VC</span>
                                       <p class="team_captain team_vice_captain" data-league_id = {{ $value['league_id'] }} data-match_id = {{ $value['match_id'] }} data-team_id = {{ $value['team_id'] }} data-player_id = {{ $value['player_id'] }}>
                                          <button class="plus player-toggle vice-cap-plus" data-event="vice_plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                          </button>
                                          <button class="minus player-toggle d-none vice-cap-minus" data-event="vice_minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                          </button>
                                      </p>
                                       {{-- <p>0.37%</p> --}}
                                   </td>
                               </tr>
                            @endforeach 

                        </tbody>
                    </table>
                </div>
                <div class="team-btns">
                    <a href="#" id="save-team-btn" class="next-btn">Save</a>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Leagues Content Section End -->

<!-- Modal failure -->
<div class="alert-msg">
    <div class="modal fade" id="capModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-image">
                        <div class="modal-failure-image modal-images-inner"></div>
                    </div>
                    <p id="cap-message">
                        
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="modal-btn btn btn-primary" data-bs-target="#exampleModalToggle2"
                        data-bs-toggle="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Modal Failure -->


<!-- Modal Success -->
<div class="alert-msg">
    <div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel1">Modal 1</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-image">
                        <div class="modal-success-image modal-images-inner"></div>
                    </div>
                    <p>
                        You can add only 1-3 player.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="modal-btn btn btn-primary" data-bs-target="#exampleModalToggle1"
                        data-bs-toggle="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
 
</div>
<!-- Modal Success -->
@endsection

@section('custom-script')

<script>
    
        @if(Session::has('success'))
        var flashMessage = "<?= Session::get('success') ?>";
        $("#success-message").html(flashMessage)
        $("#successModal").modal('show');
        @endif

        var myTeam = @json($myTeam);

        $('.tbody tr').each(function () {
            var row = $(this);
            // Retrieve data attributes from the row
            var leagueId = row.find('.team_captain').data('league_id');
            var matchId = row.find('.team_captain').data('match_id');
            var teamId = row.find('.team_captain').data('team_id');
            var playerId = row.find('.team_captain').data('player_id');

            // Check for captain status
            var isCaptain = myTeam.some(function (player) {
                return player.league_id == leagueId &&
                    player.match_id == matchId &&
                    player.team_id == teamId &&
                    player.player_id == playerId &&
                    player.is_captain == '1';
            });

            // Check for vice-captain status
            var isViceCaptain = myTeam.some(function (player) {
                return player.league_id == leagueId &&
                    player.match_id == matchId &&
                    player.team_id == teamId &&
                    player.player_id == playerId &&
                    player.is_vice_captain == '1';
            });

            // Show or hide buttons based on the player status
            if (isCaptain) {
                row.find('.team_captain .plus').addClass('d-none');
                row.find('.team_captain .minus').removeClass('d-none');
            } else {
                row.find('.team_captain .plus').removeClass('d-none');
                row.find('.team_captain .minus').addClass('d-none');
            }

            if (isViceCaptain) {
                row.find('.team_vice_captain .plus').addClass('d-none');
                row.find('.team_vice_captain .minus').removeClass('d-none');
            } else {
                row.find('.team_vice_captain .plus').removeClass('d-none');
                row.find('.team_vice_captain .minus').addClass('d-none');
            }
        });

        $('#login-click').on('click', function () {
            //   window.location.href = "{{ route('login') }}";
            $('#loginModal').modal('hide');
            //   $('#log-in-model').css('display','block');
            // document.querySelector('.log-in-now').addEventListener('click', function() {
            //  document.querySelector('.log-in-model').classList.add('model-open');
            // });

        })

        $('#save-team-btn').on('click', function (e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('auth.check') }}",
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                success: function (data) {
                       console.log(data);
                    if (data.captain != true) {
                        var flashMessage = "Please select a captain.";
                        $("#cap-message").html(flashMessage);
                        $('#capModal').modal('show');
                        return false;
                    } else if (data.vice_captain != true) {
                        var flashMessage = "Please select a vice captain.";
                        $("#cap-message").html(flashMessage);
                        $('#capModal').modal('show');
                        return false;
                    } else if (data.error == false) {
                        var flashMessage = "You need to log in before making a team.";
                        $("#login-message").html(flashMessage)
                        $('#loginModal').modal('show');
                    } else {
                        window.location.href = "{{ route('save-team') }}";
                    }
                }
            });
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.player-toggle', function () {
            var button = $(this);

            var league_id = button.closest('p').data('league_id');
            var match_id = button.closest('p').data('match_id');
            var team_id = button.closest('p').data('team_id');
            var player_id = button.closest('p').data('player_id');

            if (button.hasClass('captain-plus')) {
                var visibleMinusCount = $('.captain-minus').not('.d-none').length;

                if (visibleMinusCount >= 1) {
                    var flashMessage = "Captain already selected.";
                    $("#cap-message").html(flashMessage);
                    console.log('aaaa');
                    $('#capModal').modal('show')
                    return false;
                }
            }

            if (button.hasClass('vice-cap-plus')) {
                var visibleMinusCount = $('.vice-cap-minus').not('.d-none').length;

                if (visibleMinusCount >= 1) {
                    var flashMessage = "Vice Captain already selected.";
                    $("#cap-message").html(flashMessage);
                    $('#capModal').modal('show')
                    return false;
                }
            }

            var event = $(this).data('event');

            var formData = {
                event: event,
                league_id: league_id,
                match_id: match_id,
                team_id: team_id,
                player_id: player_id,
            };

            $.ajax({
                url: "{{ route('make.captain') }}",
                type: 'POST',
                data: formData,
                success: function (response) {

                    if (event == 'cap_plus') {

                        button.addClass('d-none');
                        button.closest('td').find('.minus').removeClass('d-none');

                    } else if (event == 'cap_minus') {

                        button.addClass('d-none');
                        button.closest('td').find('.plus').removeClass('d-none');

                    }

                    if (event == 'vice_plus') {

                        button.addClass('d-none');
                        button.closest('td').find('.minus').removeClass('d-none');

                    } else if (event == 'vice_minus') {

                        button.addClass('d-none');
                        button.closest('td').find('.plus').removeClass('d-none');

                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });

        $('#cap-ok').on('click', function () {
            $('#capModal').modal('hide');
        });



</script>

<script>
    // Log In Button
    document.querySelector('#login-click').addEventListener('click', function () {
        document.querySelector('.log-in-model').classList.add('model-open');
    });

    // Close Button and Overlay for both Sign Up and Log In
    document.querySelectorAll('.close-btn, .bg-overlay').forEach(function (element) {
        element.addEventListener('click', function () {
            document.querySelectorAll('.custom-model-main').forEach(function (modal) {
                modal.classList.remove('model-open');
            });
        });
    });

</script>


@endsection
