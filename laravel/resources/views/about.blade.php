@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="contain justify-content-center">
    <img class="mainPic" src="{{ asset('images/bureau.jpg') }}" alt="">
    <div class="about-us-txt">
      Nous somme une entreprise grenobloise qui participe a la mise en valeur de votre entreprise ! Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    </div>
    <div class="someNumbers">
      <div>
        <img class="logoStat" src="{{ asset('images/stat.png') }}">
        <div>+ de 30% de <br>  visibilité</div>
      </div>
      <div>
        <img class="logoStat" src="{{ asset('images/stat.png') }}">
        <div>+ de 30% de <br> visibilité</div>
      </div>
      <div>
        <img class="logoStat" src="{{ asset('images/stat.png') }}">
        <div>+ de 30% de <br>  visibilité</div>
      </div>
    </div>
    <div class="find-us">Retrouvez explore sur ces réseaux sociaux:</div>
    <div class="social">
      <div>
        <a href="#"><img class="socialMedia" src="{{ asset('images/insta.png') }}"></a>
        <span>@Explore</span>
      </div>
      <div>
        <a href="#"><img class="socialMedia" src="{{ asset('images/snap.png') }}"></a>
        <span>Explore</span>
      </div>
      <div>
        <a href="#"><img class="socialMedia" src="{{ asset('images/twi.png') }}"></a>
        <span>@Explore</span>
      </div>
      <div>
        <a href="#"><img class="socialMedia" src="{{ asset('images/fb.png') }}"></a>
        <span>Explore</span>
      </div>
    </div>
</div>
@endsection
