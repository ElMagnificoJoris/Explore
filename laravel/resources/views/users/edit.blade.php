@extends('layouts.app',['title'=>"utilisateurs"])

@section('content')
	<div class="contain">
        <div class="col-sm-offset-4 col-sm-4">
            <div class="panel panel-primary">	
                <div class="panel-heading">Modification d'un utilisateur</div> <br>
                <div class="panel-body"> 
                    <div class="col-sm-12">
                        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                            {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    @if($user->id == Auth::user()->id) {{-- L'admin actuel ne peut pas se dé-admin lui-même --}}
                                        {!! Form::checkbox('decoy', 1, true, array('disabled')) !!} Administrateur
                                        {!! Form::checkbox('admin', 1, null, array('hidden')) !!}
                                    @else
                                        {!! Form::checkbox('admin', 1, null) !!} Administrateur
                                    @endif
                                </label>
                            </div>
                        </div>
                            {!! Form::submit('Valider', ['class' => 'btn btn-success pull-right']) !!}
                        {!! Form::close() !!}
                    </div> <br>
                </div>
            </div>
            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>
        </div>
    </div>
@endsection