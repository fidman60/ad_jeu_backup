@extends('layout.details')

@section('content')
	<div class="col-sm-offset-3 col-sm-6">
		<br>
		@if(session('error'))
			<div class="alert alert-danger">{{ session('error') }}</div>
		@endif		
		<div class="panel panel-primary">	
			<div class="panel-heading">Connectez-vous !</div>
			<div class="panel-body"> 

				<!-- Formulaire de login -->
				<form method="post" action="{{ url('login') }}">
					@csrf
					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
						<input type="email" name="email" class="form-control" placeholder="Email">
						@if($errors->has('email'))
							<small class="help-block">{{ $errors->first('email') }}</small>
						@endif
					</div>
					<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
						<input type="password" name="password" class="form-control" placeholder="Mot de passe">
						@if($errors->has('password'))
							<small class="help-block">{{ $errors->first('password') }}</small>
						@endif
					</div>
					<button class="btn btn-primary pull-right">Se connecter</button>
				</form>
			</div>
		</div>

		<!-- Bouton de retour à la page précédente -->
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>

		<!-- Bouton pour l'oubli du mot de passe -->
		<a href="{{ url('password/reset') }}" style="background: orange" class="btn btn-warning pull-right">Réinitialiser le mot de passe</a>
	</div>
@stop					
 

