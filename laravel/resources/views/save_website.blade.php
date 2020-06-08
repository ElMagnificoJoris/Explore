@extends("layouts.app",['title'=>"laravel"])

@section('content')
	<div class="contain">
		<div class="col-sm-offset-4 col-sm-4">
			<div class="panel panel-info">
				<div class="panel-heading">Sauvegarder un nouveau site</div>
				<div class="panel-body"> 
					{!! Form::open(['route' => 'storeWebsite']) !!}
						@csrf
						<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
							{!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Entrez le nom du site')) !!}
							{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group {!! $errors->has('link') ? 'has-error' : '' !!}">
							{!! Form::url('link', null, array('class' => 'form-control', 'placeholder' => 'Entrez l\'url du site')) !!}
							{!! $errors->first('link', '<small class="help-block">:message</small>') !!}
						</div>
						{!! Form::submit('Ajouter', ['class' => 'btn btn-info pull-right']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection