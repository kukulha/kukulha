@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container section">
		<h3 class="green-text center">Lista de Roles</h3>
		<div class="center">
			@can('roles.create')
			<a href="{{ route('roles.create') }}" class="btn green">Nuevo</a>
			@endcan
		</div>
		<table class="centered striped">
			<thead>
				<th>Titulo</th>
				<th>Descripción</th>
				<th colspan="3">Acciones</th>
			</thead>
			<tbody>
				@foreach($roles as $role)
					<tr>
						<td>{{ $role->name }}</td>
						<td>{{ $role->description ?: 'Sin descripción' }}</td>
						@can('roles.edit')
						<td width="10px">
							<a href="{{ route('roles.edit', $role->id) }}" class="btn orange">Editar</a>
						</td>
						@endcan
						@can('roles.destroy')
						<td width="10px">{{ Form::model($role, ['route' => ['roles.destroy', $role->id], 'method' => 'delete']) }}
								{{ Form::submit('Eliminar', ['class' => 'btn red']) }}
							{{ Form::close() }}
						</td>
						@endcan
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="center">
			{{ $roles->render('pagination::default') }}
		</div>
	</div>
</main>
@endsection