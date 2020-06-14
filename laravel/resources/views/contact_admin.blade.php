@extends("layouts.app",['title'=>"laravel"])

@section('content')
    <br>
    <div class="contain">
        <div class="col-sm-offset-4 col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Liste des contacts</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>email</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{!! $contact->id !!}</td>
                                <td class="text-primary"><strong>{!! $contact->email !!}</strong></td>
                                <td>{!! link_to_route('view_contact', 'Voir', [$contact->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['delete_contact', $contact->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer ce contact ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection