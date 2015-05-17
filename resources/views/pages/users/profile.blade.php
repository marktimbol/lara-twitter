@extends('app')

@section('content')
	
	<div class="row">
		<header>
			<div class="col-md-12">
				<div class="col-md-6">
					<h1>Lara Twitter</h1>
				</div>
			</div>
		</header>
	</div>	

	<div class="row">
		<div class="col-md-12">
			<div class="col-md-3">
				<img src="http://placehold.it/100x100" class="thumbnail" />
				<h2>{{ $currentUser->fullName }}</h2>
			</div>

			<div class="col-md-6">
				<div class="post-status-block">
					{!! Form::open(['route' => 'status.post']) !!}
						<div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
							{!! Form::textarea('status',null,['class' => 'form-control', 'placeholder' => "What's on your mind?", 'rows' => 3, 'required' => 'required']) !!}
						</div>
						<div class="form-group text-right">
							{!! Form::submit('Post Status', ['class' => 'btn btn-primary']) !!}
						</div>
					{!! Form::close() !!}
				</div>

				<div class="status-list">
			
					@foreach( $statuses as $status )
						<div class="media">
							<div class="media-left">
								<a href="#">
									<img class="media-object" src="http://placehold.it/50x50" class="thumbnail" />
								</a>
							</div>

							<div class="media-body">
								<h4 class="media-heading">{{ $status->user->fullName }}</h4>
								<p class="time text-muted">{{ $status->created_at->diffForHumans() }}</p>
								<p>{{ $status->status }}</p>
							</div>
						</div>

					@endforeach

				</div>
			</div>

			<div class="col-md-3">

			</div>
		</div>
	</div>
@endsection