@extends("layouts.app",['title'=>"laravel"])

@section('content')
	<div class="contain">
		<div class="col-sm-offset-5 col-sm-5">
			<div class="panel panel-info">
				<div class="panel-heading">Sauvegarder un nouveau site</div> <br>
				<div class="panel-body"> 
					{!! Form::open(['route' => 'store_website']) !!}
						@csrf
						<div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
							{!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Nom du site')) !!}
							{!! $errors->first('name', '<small class="help-block">:message</small>') !!}
						</div>
						<div class="form-group {!! $errors->has('link') ? 'has-error' : '' !!}">
							{!! Form::url('link', null, array('class' => 'form-control', 'placeholder' => 'URL')) !!}
							{!! $errors->first('link', '<small class="help-block">:message</small>') !!}
						</div>
						{!! Form::submit('Ajouter', ['class' => 'btn btn-info pull-right']) !!}
					{!! Form::close() !!}
				</div>
				</div>

				@if(count(DB::table('savedwebsites')->get()) != 0)
					<hr>
					<div class="panel-heading">Supprimer un site</div> <br>
					<div class="panel-body">
						<div style="display:flex;">
							@foreach (DB::table('savedwebsites')->get() as $savedwebsite)
								{!! Form::open(['method' => 'DELETE', 'route' => ['delete_website', $savedwebsite->name]]) !!}
									{!! Form::submit($savedwebsite->name, ['class' => 'btn btn-danger', 'style' => 'margin-right: 15px;']) !!}
								{!! Form::close() !!}
							@endforeach
						</div>
					</div>
					</div>
				@endif
			</div>
		</div>
	</div>
@endsection