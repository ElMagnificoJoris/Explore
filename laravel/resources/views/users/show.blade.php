@extends('layouts.app',['title'=>"{{ $user->name }}"])

@section('content')
	<div class="contain">
        <div class="col-sm-offset-4 col-sm-4">
            <div class="panel panel-primary">	
                <div class="panel-heading">Fiche d'utilisateur</div> <br>
                <div class="panel-body"> 
                    <p>Nom : {{ $user->name }} <br>
                    Email : {{ $user->email }}</p>
                    @if($user->admin == 1)
                        <p>Administrateur</p>
                    @endif
                </div>
            </div>				
            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>
        </div>
    </div>
@endsection