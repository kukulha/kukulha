@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container section">
		<h3 class="green-text center">Mensajes</h3>
		<table class="centered striped">
			<thead>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				@foreach($messages as $message)
					<tr>
						<td>{{ $message->name }}</td>
						<td>{{ $message->email }}</td>
						@can('messages.destroy')
						<td width="10px">
							{{ Form::model($message,['route' => ['messages.destroy', $message->id], 'method' => 'delete'])}}
								{{ Form::submit('Eliminar', ['class' => 'btn red']) }}
							{{ Form::close() }}
						</td>
						@endcan
					</tr>
				@endforeach
			</tbody>
		</table>

	</div>
	<div class="center">
		{{ $messages->render('pagination::default') }}
	</div>
</main>
@endsection