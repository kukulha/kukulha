@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container section">
		<div class="card">
			<div class="card-content">
				<h4 class="green-text">Editar Usuario</h4>
				{{ Form::model($user,['route' => ['users.update', $user->id], 'method' => 'put' , 'files' => 'true']) }}
					@include('admin.users.partials.form')
				{{ Form::close() }}
			</div>
		</div>
		
	</div>
</main>
@endsection