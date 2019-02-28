@extends('layouts.app')

@section('content')
<div class="container">
    <passport-clients></passport-clients>
    <hr>
    <passport-authorized-clients></passport-authorized-clients>
    <hr>
    <passport-personal-access-tokens></passport-personal-access-tokens>
    <hr>
    @foreach(App\User::all() as $user)
    <li> {{ $user->name }} </li>
    @endforeach   

    @foreach(App\Project::all() as $project)
    <li> {{ $project->host.' - '.$project->domain }} </li>
    @endforeach   
</div>
@endsection
<?php 

// factory(App\Project::class, 5)->create();
// dd(App\Project::all());
?>
<!--

eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjgwZTQwOGVmMmVjMDNiM2E1ZDhhYTE5MmIyNTc1YzZkZmEwZTEwMjhkMDkzMDk5NzRmMWIzMDhmZDM1MGMyYzRiNmI3OWVlN2Y4MWQwNWZmIn0.eyJhdWQiOiIxIiwianRpIjoiODBlNDA4ZWYyZWMwM2IzYTVkOGFhMTkyYjI1NzVjNmRmYTBlMTAyOGQwOTMwOTk3NGYxYjMwOGZkMzUwYzJjNGI2Yjc5ZWU3ZjgxZDA1ZmYiLCJpYXQiOjE1NTA3NjA0MTcsIm5iZiI6MTU1MDc2MDQxNywiZXhwIjoxNTgyMjk2NDE3LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.kPWix0m-suS2P6YULZQBeeWPyg0qyJNxw0nHMIrq3ATOI1GTUXsF-EiS0n20mmdq3t8mW602LWLC7VirMJyzov3Lc_6QruNl1JOivWZ9F-tGHAxI8Zl5CbGVTbuUv3wGKxdOKftYPExRiiv0NsvPsPYb9i997mDw2f3lv8oFSjGctiyw_eYwS2ey3arFzKllyFxePeuPvyPLzxSQdrlHVoKyNMrU2LkCR0MMdg_n_5uFATCb22zC-60K-t7Ab1pPIFL32H2XBMpMha0DOEnd8DB0_FDgCG84cwnpZ-7IxFN_PIgkthUqUvHhcWCU9Q6t1tFRdsfohFuypVBMSnnd2ToCuHCZxrrtfMSywhgGPPzUFzhhC1uHsIyBul9ONG4Jxchm3x8NQ7nZjMno0s0qGjC8sXyphDY_xMG1NXeqxTNpGAp8JR7UkbReiPKMaZ6CQApIbfW7y27DtOFZ4VpDMrq4nZ0QUlHBwNsvJwH31n4dpI6lqjRhMhKjyV8yJ-iqWSVJMCqXXeh3gwXtQRSWJkspsZ0sgt8s4NUlIZ5wktEJnlWZy7eDSkOeLcWlotRvH--vMccAO2iYJYR8TsUBc2evWLe1DzVsGD__QkthhpokETTqz9dAoB5tCrDuMOm5i36K4n7uBf_sMBv6vikvEU5DSxkv91u7LV5MkV071qo

-->