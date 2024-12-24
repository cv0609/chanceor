@extends('front_end.layout.main')
@section('content')

<main class="main-content" id="main-content">
   <!--  -->
   <!--  -->
   <!--  -->
   <section class="constitutes">
       <div class="container">
           <div class="constitutes-inner">
               <div class="back-btn">
                   <a href="matches">
                       <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                           fill="#fff">
                           <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                       </svg>
                   </a>
               </div>
               <h2>2023-24 Season </h2>

               <div class="palyer-header">
                   <div class="team-logo">
                       <div class="team_inner">
                           <img src="{{ $matchDetails->home_team_logo ?? '' }}" alt="team-logo-4">
                           {{-- <span> SHL</span> --}}
                       </div>
                       <h6>{{ $matchDetails->home_team_name ?? '' }}</h6>
                   </div>
                   <div class="match-details">
                       {{-- <h6>Chase Stadium</h6>
                       <p>Fort Lauderdale, Florida</p> --}}
                       <span>{{ date('Y-m-d h:i a', strtotime($matchDetails->fixture_date ?? '')) }}</span>
                   </div>
                   <div class="team-logo">
                       <div class="team_inner">
                           {{-- <span>CNGZ </span> --}}
                           <img src="{{ $matchDetails->away_team_logo ?? '' }}" alt="team-logo-2">
                       </div>
                       <h6>{{ $matchDetails->away_team_name ?? '' }}</h6>
                   </div>
               </div>
               <div class="constitutes-inner-content">
                   <div class="matches-table">
                       <table cellpadding="0" cellspacing="0">
                           <thead>
                               <tr>
                                   <th scope="col">Logo</th>
                                   <th scope="col">Name</th>
                                   <th scope="col">Position</th>
                                   <th scope="col">Socure</th>

                               </tr>
                           </thead>
                           <tbody>
                              @foreach ($teams[0]->teamDetails ?? [] as $data)
                               <tr>
                                   <td class="match-team-logo">
                                       <a href="premier-league-players">
                                           <img class="table-img me-2"
                                               src="{{$data->player_team_logo}}"
                                               alt="">
                                       </a>
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
                   {{-- <div class="team-btns">
                       <a href="team-view" class="next-btn">next</a>
                   </div> --}}
               </div>
           </div>
       </div>
   </section>
   <!--  -->
</main>


@endsection

@section('custom-script')



@endsection
