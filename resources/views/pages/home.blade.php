@extends('app')

@section('content')
	
	<div class="row">
		<header>
			<div class="col-md-12">
				<div class="col-md-6">
					<h1>Twitter</h1>
				</div>
			</div>
		</header>
	</div>	

	<div class="row">
		<div class="col-md-12">
			<div class="col-md-7">
				<h2>Welcome to Twitter.</h2>
				<p class="lead">Connect with your friends — and other fascinating people. Get in-the-moment updates on the things that interest you. And watch events unfold, in real time, from every angle.</p>
			</div>

			<div class="col-md-5">
				
				<div class="panel panel-default twitter-login-form">
					<div class="panel-heading">
						<h3 class="panel-title">Login</h3>
					</div>
					<div class="panel-body">

						@include('errors.message')

						{!! Form::open( ['route' => 'auth.login']) !!}
							<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
								{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
							</div>
							<div class="form-group row {{ $errors->has('password') ? 'has-error' : '' }}">
								<div class="col-md-9">
									{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) !!}
								</div>
								<div class="col-md-3">
									{!! Form::submit('Log in', ['class' => 'btn btn-primary']) !!}
								</div>
							</div>

							<div class="checkbox">
								<label>
									{!! Form::checkbox('rememberMe') !!} Remember Me . <a href="#">Forgot Password?</a>
								</label>
							</div>
	
						{!! Form::close() !!}
					</div>
				</div>	
						

				<div class="panel panel-default twitter-signup-form">
					<div class="panel-heading">
						<h3 class="panel-title">New to Twitter? Sign up</h3>
					</div>
					<div class="panel-body">
						{!! Form::open( ['route' => 'auth.register']) !!}
							<div class="form-group {{ $errors->has('fullName') ? 'has-error' : '' }}">
								{!! Form::text('fullName', null, ['class' => 'form-control', 'placeholder' => 'fullName']) !!}
							</div>
							<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
								{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
							</div>
							<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
								{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) !!}
							</div>		
							<div class="form-group text-right">
								{!! Form::submit('Signup for Twitter', ['class' => 'btn btn-warning']) !!}
							</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection