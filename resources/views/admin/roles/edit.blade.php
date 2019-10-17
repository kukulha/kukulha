@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container section">
		<div class="card">
			<div class="card-content">
				<h4 class="green-text">Editar Rol</h4>
				{{ Form::model($role,['route' => ['roles.update', $role->id], 'method' => 'put' ]) }}
					@include('admin.roles.partials.form')
				{{ Form::close() }}
			</div>
		</div>
		
	</div>
</main>
@endsection