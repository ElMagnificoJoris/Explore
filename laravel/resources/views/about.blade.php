@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="contain justify-content-center">
    <img class="mainPic" src="{{ asset('images/bureau.jpg') }}" alt="">
    <div class="about-us-txt">
      Nous sommes une entreprise grenobloise qui participe à la mise en valeur de votre entreprise !
      Grâce à notre expérience dans le numérique, et dans le marketing digital, couplé à notre réseaux,
      nous allons vous aider à créer votre propre réseau !
    <div class="someNumbers">
      <div>
        <img class="logoStat" src="{{ asset('images/stat.png') }}">
        <div>+ de 30% de <br>visibilité en <br> moyenne !</div>
      </div>
      <div>
        <img class="logoStat" src="{{ asset('images/statup.png') }}">
        <div>10 000 abonnés <br>en seulement <br>2 mois</div>
      </div>
      <div>
        <img class="logoStat" src="{{ asset('images/money.png') }}">
        <div>+ 20% de ventes<br> en ligne</div>
      </div>
    </div>
    <div class="find-us">Retrouvez explore sur ses réseaux sociaux:</div>
    <div class="social">
      <div>
        <span>-</span>
        <a href="#"><img class="socialMedia" src="{{ asset('images/insta.png') }}"></a>
        <span>@Explore</span>
      </div>
      <div>
        <span>-</span>
        <a href="#"><img class="socialMedia" src="{{ asset('images/snap.png') }}"></a>
        <span>Explore</span>
      </div>
      <div>
        <span>-</span>
        <a href="#"><img class="socialMedia" src="{{ asset('images/twi.png') }}"></a>
        <span>@Explore</span>
      </div>
      <div>
        <span>-</span>
        <a href="#"><img class="socialMedia" src="{{ asset('images/fb.png') }}"></a>
        <span>Explore</span>
      </div>
    </div>
</div>
@endsection
