@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/presta.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="contain justify-content-center">
  <div class=stat>
    <div>
      <span>Visibilité</span>
      <img src="{{ asset('images/vis.png') }}">
      <div>
        Nous vous apprenons à utiliser les réseaux afin d'avoir plus de visibilité.
      </div>
    </div>
    <div>
      <span>Crédibilité</span>
      <img src="{{ asset('images/cre.png') }}">
      <div>
        Avoir des posts professionnels aide à agrandir sa crédibilité auprès des entreprises.
      </div>
    </div>
    <div>
      <span>Autonomie</span>
      <img src="{{ asset('images/auto.png') }}">
      <div>
        Nous vous apprenons un savoir que vous pourrez réutiliser sans aucune aide.
      </div>
    </div>
  </div>
  <h1>Nos Prestations</h1>
  <div class="presta">
    <div>
      <img src="{{ asset('images/social.jpg') }}">
      <div>
        Nous vous apprenons à gérer vos réseaux sociaux, afin de vous contruire un réseau !
      </div>
    </div>
    <div>
      <div>
        Nous vous fournissons aussi les clés pour pouvoir créer votre propre site web profesionnel !
      </div>
      <img src="{{ asset('images/website.jpg') }}">
    </div>
    <div>
      <img src="{{ asset('images/ntic.jpg') }}">
      <div>
        Nous vous apprenons les Nouvelles Techniques de l’Information et de la Communication (NTIC) afin de mieux gérer votre comunication digitale !
      </div>
    </div>
  </div>
</div>
@endsection
