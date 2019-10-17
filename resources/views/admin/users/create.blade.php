@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container section">
		<div class="card">
			<div class="card-content">
				<h4 class="green-text center">Crear Usuario</h4>
				{{ Form::open(['route' => 'users.store', 'method' => 'POST']) }}
					@include('admin.users.partials.form')
				{{ Form::close() }}
			</div>
		</div>
		
	</div>
</main>
@endsection