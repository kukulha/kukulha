@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container section">
		<h3 class="green-text center">Lista de Usuarios</h3>
		<div class="center">
			@can('users.create')
			<a href="{{ route('users.create') }}" class="btn green">Nuevo</a>
			@endcan
		</div>
		<table class="centered striped">
			<thead>
				<th width="100px">Avatar</th>
				<th>Nombre</th>
				<th colspan="2">Acciones</th>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td width="100px"><img src="{{ asset('upload/avatar/'.$user->avatar) }}" class="responsive-img circle" width="50px" alt=""></td>
						<td><a href="{{ route('user.profile', $user->id) }}">{{ $user->name }}</a></td>
						@can('users.edit')
						<td width="10px">
							<a href="{{ route('users.edit', $user->id) }}" class="btn orange">Editar</a>
						</td>
						@endcan
						@can('users.destroy')
						<td width="10px">{{ Form::model($user, ['route' => ['users.destroy', $user->id], 'method' => 'delete']) }}
								{{ Form::submit('Eliminar', ['class' => 'btn red']) }}
							{{ Form::close() }}
						</td>
						@endcan
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="center">
			{{ $users->render('pagination::default') }}
		</div>
	</div>
</main>
@endsection