@extends('layouts.app',['title'=>"utilisateurs"])

@section('content')
	<div class="contain">
        <div class="col-sm-offset-4 col-sm-4">
            @if(session()->has('ok'))
                <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
            @endif
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Liste des utilisateurs</h3>
                </div>
                @if(count($users) != 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{!! $user->id !!}</td>
                                    <td class="text-primary"><strong>{!! $user->name !!}</strong></td>
                                    <td>{!! link_to_route('users.show', 'Voir', [$user->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                    <td>{!! link_to_route('users.edit', 'Modifier', [$user->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                    <td>
                                        @if($user->id != Auth::user()->id) {{-- On ne peut pas se supprimer soi-même --}}
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) !!}
                                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                            {!! Form::close() !!}
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                        <br><p>Aucun utilisateur</p>
                @endif
            </div>
            {!! $links !!}
        </div>
    </div>
@endsection