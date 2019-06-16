@extends('layout.details')

@section('content')
	<div class="col-sm-offset-3 col-sm-6">
		<br>
		@if(session('error'))
			<div class="alert alert-danger">{{ session('error') }}</div>
		@endif
		<div class="panel panel-primary">	
			<div class="panel-heading">Création d'un nouveau mot de passe</div>
			<div class="panel-body"> 
				<div class="col-sm-12">
					<!-- Formulaire -->
					<form method="post" action="{{ url('password/reset') }}" class="form-horizontal panel">
						@csrf
						<input type="hidden" name="token" value="{{ $token }}">
						<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
							<input type="email" name="email" class="form-control" placeholder="Email">
							@if($errors->has('email'))
								<small class="help-block">{!! $errors->first('email') !!}</small>
							@endif
						</div>
						<div class="form-group {!! $errors->has('password') ? 'has-error' : '' !!}">
							<input type="password" name="password" class="form-control" placeholder="Mot de passe">
							@if($errors->has('password'))
								<small class="help-block">{!! $errors->first('password') !!}</small>
							@endif
						</div>
						<div class="form-group">
							<input type="password" name="password_confirmation" class="form-control" placeholder="Confirmation mot de passe">
						</div>
						<div>
							<button class="btn btn-primary pull-right">Réinitialiser</button>
						</div>
					</form>
					<!-- Fin du formulaire -->
				</div>
			</div>
		</div>
	</div>
@stop					
 

