@extends('front_end.layout.main')
@section('content')

<main class="main-content" id="main-content">
   <!--  -->
   <!--  -->
   <!--  -->

   <!-- Tabs -->





   <section class="constitutes">
       <div class="container">


           <div class="constitutes-inner">
               <h2>My Matches </h2>

               <!-- Content -->
               <div class="constitutes-inner-content">
                   <div class="matches-table ">
                       <table cellpadding="0" cellspacing="0">
                           <thead>
                               <tr>
                                   <th scope="col">Team</th>
                                   <th scope="col">Match Info</th>
                                   <th scope="col">Team</th>
                                   <th scope="col">Score </th>
                                   <th scope="col">Status </th>

                               </tr>
                           </thead>
                           <tbody>
                            @foreach ($matches as $match)
                               <tr class="matche-main" data-fixture-id="{{ $match->fixture_id ?? ''}}" data-league-id="{{ $match->league->league_id ?? ''}}">
                                   <td class="match-team-logo">
                                       <a href="javascript:void(0)">
                                           <img class="table-img me-2" src="{{ $match->home_team_logo ?? '' }}" alt="{{ $match->home_team_name ?? '' }} logo">
                                           <h6>{{ $match->home_team_name ?? '' }}</h6>
                                       </a>
                                   </td>
                                   <td>
                                       {{-- <h6>Hornchurch Stadium</h6>
                                       <p>London</p> --}}
                                       <span>{{ date('Y-m-d h:i a', strtotime($match->fixture_date ?? '')) }}</span>
                                   </td>
                                   <td class="match-team-logo">

                                       <img src="{{ $match->away_team_logo ?? '' }}" alt="{{ $match->away_team_name ?? '' }} logo"  alt="Chelmsford City logo">
                                       <h6>{{ $match->away_team_name ?? '' }}</h6>
                                   </td>
                                   <td class="match-score">
                                       <h4>0</h4>
                                   </td>
                                   <td class="match-status">
                                       <p class="win">-- </p>

                                   </td>
                               </tr>
                           </tbody>
                           @endforeach
                       </table>
                   </div>

               </div>

           </div>
       </div>
   </section>
   <!--  -->
</main>

@endsection

@section('custom-script')

<script>
   $(".matche-main").on('click', function() {
    var fixtureId = $(this).data('fixture-id');
    var leagueId = $(this).data('league-id');
    var url = "{{ route('profile.match-detail', [':leagueId', ':fixtureId']) }}";
    url = url.replace(':fixtureId', fixtureId).replace(':leagueId', leagueId);
    window.location.href = url;
  });
</script>

@endsection
