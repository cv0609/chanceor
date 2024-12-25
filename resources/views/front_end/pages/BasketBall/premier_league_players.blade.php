@extends('front_end.layout.main')
@section('title','League players')
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
                        Matches Details
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->

<!-- Leagues Content Section Start -->
<section class="basket_leagues matches-details">
    <div class="container">


        <div class="basket_leagues-inner">
            <div class="back-btn">
                <a href="{{ route('leagueMatches',['leagueId'=>$matchDetails[0]->league->id]) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#fff">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                    </svg>
                </a>
            </div>
            <h2>{{ date('Y').'-'.(date('Y') + 1) }} Season</h2>

            <div class="plyr-hedr">
                <div class="team-logo">
                    <div class="team_inner">
                        <img src="{{ $matchDetails[0]->home_team_logo ?? ''}}" alt="team-logo-4">

                    </div>
                    <h6>{{$matchDetails[0]->home_team_name}}</h6>
                </div>
                <div class="match-details">
                    <!-- <h6>Brooklyn Nets</h6>
                    <p>Brooklyn</p> -->
                    <span>{{ date('Y-m-d h:i a',strtotime($matchDetails[0]->fixture_date ?? ''))}}</span>
                </div>
                <div class="team-logo">
                    <div class="team_inner">
                        <img src="{{$matchDetails[0]->away_team_logo}}" alt="team-logo-2">

                    </div>
                    <h6>{{$matchDetails[0]->away_team_name}}<</h6> </div> </div> <div class="tab-content-wrapper">
                            <div class="toggle-target">
                                <a href="#" class="tab active" data-toggle-target=".tab-content-1">Guard</a>
                                <a href="#" class="tab" data-toggle-target=".tab-content-2">Forward</a>
                                <a href="#" class="tab" data-toggle-target=".tab-content-3">Center</a>
                            </div>

                            <div class="tab-content tab-content-1 active">
                                <div class="basket_leagues-inner-content">
                                    <div class="matches-table matche-det">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th scope="col" class="">Selected By</th>
                                                    <th scope="col">Team</th>
                                                    <th scope="col">Age</th>
                                                    <th scope="col">Injured</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($organizedPlayers['Guard'] as $item)
                                                <tr data-team-id="{{$item->player_team_id}}"
                                                    data-player-id="{{$item->player_id}}" data-player-role="G"
                                                    data-player-name="{{$item->name}}"
                                                    data-team-logo="{{$item->team_logo}}"
                                                    data-match-id="{{$matchDetails[0]->fixture_id}}"
                                                    data-team-name="testing"
                                                    data-home-team="{{ $matchDetails[0]->home_team_id }}"
                                                    data-away-team="{{ $matchDetails[0]->away_team_id }}"
                                                    data-slug-matchid="{{ $matchDetails[0]->id }}">
                                                    <td></td>

                                                    <td class="player-name">
                                                        <p>{{$item->name ?? ''}}</p>
                                                    </td>
                                                    <td class="match-team-logo">                                                       
                                                            <img class="table-img me-2" src="{{$item->team_logo ?? ''}}"
                                                                alt="">                                                        
                                                    </td>

                                                    <td class="match-position">
                                                        <p>{{$item->position ?? ''}}</p>
                                                    </td>
                                                    <td class="credits_points">
                                                        <span>No</span>
                                      

                                                        <button class="plus player-toggle" data-event="plus">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="minus player-toggle d-none" data-event="minus">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-content tab-content-2">
                                <div class="basket_leagues-inner-content">
                                    <div class="matches-table matche-det">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th scope="col" class="">Selected By</th>
                                                    <th scope="col">Team</th>
                                                    <th scope="col">Age</th>
                                                    <th scope="col">Injured</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($organizedPlayers['Forward'] as $item)
                                                <tr data-team-id="{{$item->player_team_id}}"
                                                    data-player-id="{{$item->player_id}}" data-player-role="F"
                                                    data-player-name="{{$item->name}}"
                                                    data-team-logo="{{$item->team_logo}}"
                                                    data-match-id="{{$matchDetails[0]->fixture_id}}"
                                                    data-team-name="testing"
                                                    data-home-team="{{ $matchDetails[0]->home_team_id }}"
                                                    data-away-team="{{ $matchDetails[0]->away_team_id }}"
                                                    data-slug-matchid="{{ $matchDetails[0]->id }}">
                                                    <td></td>
                                                    <td class="player-name">
                                                        <p>{{$item->name ?? ''}}</p>
                                                    </td>
                                                    <td class="match-team-logo">                                                       
                                                            <img class="table-img me-2" src="{{$item->team_logo ?? ''}}"
                                                                alt="">                                                        
                                                    </td>

                                                    <td class="match-position">
                                                        <p>{{$item->position ?? ''}}</p>
                                                    </td>
                                                    <td class="credits_points">
                                                        <span>No</span>
                                        
                                                        <button class="plus player-toggle" data-event="plus">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="minus player-toggle d-none" data-event="minus">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-content tab-content-3">
                                <div class="basket_leagues-inner-content">
                                    <div class="matches-table matche-det">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th scope="col" class="">Selected By</th>
                                                    <th scope="col">Team</th>
                                                    <th scope="col">Age</th>
                                                    <th scope="col">Injured</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($organizedPlayers['Center'] as $item)
                                                <tr data-team-id="{{$item->player_team_id}}"
                                                    data-player-id="{{$item->player_id}}" data-player-role="C"
                                                    data-player-name="{{$item->name}}"
                                                    data-team-logo="{{$item->team_logo}}"
                                                    data-match-id="{{$matchDetails[0]->fixture_id}}"
                                                    data-team-name="testing"
                                                    data-home-team="{{ $matchDetails[0]->home_team_id }}"
                                                    data-away-team="{{ $matchDetails[0]->away_team_id }}"
                                                    data-slug-matchid="{{ $matchDetails[0]->id }}">
                                                    <td></td>
                                                    <td class="player-name">
                                                        <p>{{$item->name ?? ''}}</p>
                                                    </td>
                                                    <td class="match-team-logo">
                                                        
                                                            <img class="table-img me-2" src="{{$item->team_logo ?? ''}}"
                                                                alt="">
                                                        
                                                    </td>

                                                    <td class="match-position">
                                                        <p>{{$item->position ?? ''}}</p>
                                                    </td>
                                                    <td class="credits_points">
                                                        <span>No</span>
                                        
                                                        <button class="plus player-toggle" data-event="plus">
                                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                                        </button>
                                                        <button class="minus player-toggle d-none" data-event="minus">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                </div>
                <div class="team-btns">
                    <a href="{{ route('my-team') }}" class="next-btn">Next</a>
                </div>

            </div>
        </div>
</section>
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
<!-- Leagues Content Section End -->

<div class="alert-msg">
      <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="btn-close close-btn" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa-solid fa-x"></i>
              </button>
              </div>
              <div class="modal-body">
               <span>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#d30f0f"><path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240Zm40 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
               </span>
                  <h4 id="login-message"></h4>
              </div>
              <div class="modal-footer">
              <button type="button" id="login-click" class="btn btn-secondary" data-bs-dismiss="modal">Login</button>
              </div>
          </div>
          </div>
      </div>
   </div>
@endsection

@section('custom-script')

<script>
       autoSelect();
       function autoSelect()
        {
            $('.tbody tr').each(function () {
            var row = $(this);
            var leagueId = "{{$matchDetails[0]->league->league_id}}";

            var teamId = row.data('team-id');
            var playerId = row.data('player-id');
            var playerRole = row.data('player-role');
            var playerName = row.data('player-name');

            var playerExists = myTeam.some(function (player) {
                return player.team_id == teamId && player.player_id == playerId && player
                    .player_role == playerRole && player.player_name == playerName && player
                    .league_id == leagueId;
            });

            if (playerExists) {
                row.find('.plus').addClass('d-none');
                row.find('.minus').removeClass('d-none');
            } else {
                row.find('.plus').removeClass('d-none');
                row.find('.minus').addClass('d-none');
            }
        });
        }
       
        $('.tab').on('click', function (evt) {
            evt.preventDefault();

            // Remove 'active' class from all tabs and add to the clicked tab
            $('.tab').removeClass('active');
            $(this).addClass('active');

            // Get the target content associated with the clicked tab
            var sel = $(this).attr('data-toggle-target');

            // Remove 'active' class from all tab contents and add to the selected one
            $('.tab-content').removeClass('active');
            $(sel).addClass('active');
        });

        $('#cap-ok').on('click', function () {
            $('#capModal').modal('hide');
        });


        var myTeam = @json(Session::get('myTeam', []));

        $('.tbody tr').each(function () {
            var row = $(this);
            var leagueId = "{{$matchDetails[0]->league->league_id}}";

            var teamId = row.data('team-id');
            var playerId = row.data('player-id');
            var playerRole = row.data('player-role');
            var playerName = row.data('player-name');

            var playerExists = myTeam.some(function (player) {
                return player.team_id == teamId && player.player_id == playerId && player
                    .player_role == playerRole && player.player_name == playerName && player
                    .league_id == leagueId;
            });

            if (playerExists) {
                console.log(row, 'playerExists');
                console.log(playerExists, 'playerExists');
                row.find('.plus').addClass('d-none');
                row.find('.minus').removeClass('d-none');
            } else {
                row.find('.plus').removeClass('d-none');
                row.find('.minus').addClass('d-none');
            }
        });

        $('.next-btn').click(function (e) {
            e.preventDefault();

            var nextBtn = $(this);

            $.get("{{ route('current-team-count') }}", function (data, status) {
                if (data.success == true && data.count != 5) {
                    // $("#error-message").html('Your team must have exactly 5 players.');
                    // alert('Your team must have exactly 5 players.');

                    $("#cap-message").html('Your team must have exactly 5 players.');
                    $('#capModal').modal('show');
                    return false;

                } else {
                    window.location.href = nextBtn.attr('href');
                }
            });
        });

        $(document).on('click', '.player-toggle', function () {

            var team_id = $(this).closest('tr').data('team-id');
            var player_id = $(this).closest('tr').data('player-id');
            var player_role = $(this).closest('tr').data('player-role');
            var leagueId = "{{$matchDetails[0]->league->league_id}}";
            var player_name = $(this).closest('tr').data('player-name');
            var team_logo = $(this).closest('tr').data('team-logo');
            var match_id = $(this).closest('tr').data('match-id');
            var team_name = $(this).closest('tr').data('team-name');
            var homeTeamId = $(this).closest('tr').data('home-team');
            var awayTeamId = $(this).closest('tr').data('away-team');
            var dbMatchId = $(this).closest('tr').data('slug-matchid');

            var button = $(this); // Store reference to the clicked button
            var isPlus = button.hasClass('plus'); // Check if the clicked button is a "plus" button
            var event = $(this).data('event');
            var formData = {
                team_id: team_id,
                player_id: player_id,
                player_role: player_role,
                leagueId: leagueId,
                player_name: player_name,
                event: event,
                team_logo: team_logo,
                match_id: match_id,
                team_name: team_name,
                homeTeamId: homeTeamId,
                awayTeamId: awayTeamId,
                dbMatchId: dbMatchId,
            };

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('create-team') }}",
                type: 'POST',
                data: formData,
                success: function (response) {
                    if (response.success == true) {
                        if (isPlus) {
                            button.addClass('d-none');
                            button.closest('td').find('.minus').removeClass('d-none');
                            button.parent('td').parent('tr').addClass('select-player');
                        } else {
                            button.addClass('d-none');
                            button.closest('td').find('.plus').removeClass('d-none');
                            button.parent('td').parent('tr').removeClass('select-player');

                        }
                    } else {
                        // $("#error-message").html(response.message);
                        // $("#errorModal2").modal('show');
                        // alert(response.message);

                        $("#cap-message").html(response.message);
                        $('#capModal').modal('show');
                        return false;
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
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
