@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/presta.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="contain justify-content-center">
  <div class=stat>
    <div>
      <span>Vibivilité</span>
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
      <img src="{{ asset('images/bureau.jpg') }}">
      <div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      </div>
    </div>
    <div>
      <div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      </div>
      <img src="{{ asset('images/bureau.jpg') }}">
    </div>
    <div>
      <img src="{{ asset('images/bureau.jpg') }}">
      <div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      </div>
    </div>
  </div>
</div>
@endsection
