@extends('front_end.layout.main')
@section('title','Match details')
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
                        Match Details
                    </h3>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Leagues Pages Banner Section End -->

<!-- Leagues Content Section Start -->
<section class="basket_leagues match-details-page">
    <div class="container">
        <div class="basket_leagues-inner">
            <div class="back-btn">
                <a href="{{route('profile.matches')}}" class="back-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#fff">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z" />
                    </svg>
                </a>
            </div>
            <!-- Component Start -->
            <h1 class="font-medium">
                My Players
            </h1>
            <div class="flex flex-col mt-6">
                <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="palyer-header">
                            <div class="team-logo">
                            <img src="{{ $matchDetails->home_team_logo ?? '' }}" alt="team-logo-4">

                                <h6>{{ $matchDetails->home_team_name ?? '' }}</h6>
                            </div>
                            <div class="match-details">
                                <!-- 
                                    <h6></h6>
                                    <p></p>
                                     -->
                                <span>{{ date('Y-m-d h:i a', strtotime($matchDetails->fixture_date ?? '')) }}M</span>
                            </div>

                            <div class="team-logo">
                            <img src="{{ $matchDetails->away_team_logo ?? '' }}" alt="team-logo-2">

                                <h6>{{ $matchDetails->away_team_name ?? '' }}</h6>
                            </div>
                        </div>

                        <div class="matches-table">
                            <div class="div-tbl">
                                <table class="table table-light table-striped table-hover table-sm">
                                    <thead class=" text-uppercase">
                                        <tr>
                                            <th scope="col">Team</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Position</th>
                                            <th scope="col">Score</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($teams[0]->teamDetails ?? [] as $data)
                               <tr>
                                   <td class="match-team-logo">
                                       <!-- <a href="premier-league-players"> -->
                                           <img class="table-img me-2"
                                               src="{{$data->player_team_logo}}"
                                               alt="">
                                       <!-- </a> -->
                                   </td>
                                   <td class="player-name">
                                       <p>{{$data->player_name}}</p>
                                   </td>
                                   <td class="match-position">
                                       <p>{{$data->player_pos}}</p>
                                   </td>
                                   <td class="match-score">
                                       <h4>0</h4>
                                   </td>
                               </tr>
                               @endforeach
                          

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Component End  -->
        </div>
    </div>
</section>
<!-- Leagues Content Section End -->
@endsection

@section('custom-script')



@endsection
