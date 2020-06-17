@extends("layouts.app",['title'=>"laravel"])

@section('content')
    <div class="contain">
		<div class="col-sm-offset-4 col-sm-4">
			<div class="panel panel-info">
				<div class="panel-heading">Vous contacter</div>
				<div class="panel-body">
                    Pour que l'on puisse vous contacter, veuillez remplir ce formulaire: <br> <br>

					{!! Form::open(['route' => 'contact']) !!}
						@csrf
						<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
							{!! Form::text('nom', null, array('class' => 'form-control', 'placeholder' => 'Nom')) !!}
							{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
							{!! Form::text('prenom', null, array('class' => 'form-control', 'placeholder' => 'Prénom')) !!}
							{!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
							{!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) !!}
							{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('tel') ? 'has-error' : '' !!}">
							{!! Form::tel('tel', null, array('class' => 'form-control', 'placeholder' => 'N° téléphone (ex: 0123456789)')) !!}
							{!! $errors->first('tel', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('comp') ? 'has-error' : '' !!}">
							{!! Form::tel('comp', null, array('class' => 'form-control', 'placeholder' => 'Nom d\'entreprise (optionnel)')) !!}
							{!! $errors->first('comp', '<small class="help-block">:message</small>') !!}
						</div>
						{!! Form::submit('Envoyer', ['class' => 'btn btn-info pull-right']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection