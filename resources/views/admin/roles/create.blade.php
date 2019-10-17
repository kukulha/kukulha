@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container section">
		<div class="card">
			<div class="card-content">
				<h4 class="green-text">Crear Rol</h4>
				{{ Form::open(['route' => 'roles.store']) }}
					@include('admin.roles.partials.form')
				{{ Form::close() }}
			</div>
		</div>
		
	</div>
</main>
@endsection