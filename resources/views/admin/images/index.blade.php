@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container section">
		<h3 class="green-text center">Lista de Imagenes</h3>
		<div class="center">
			@can('images.create')
				<a href="{{ route('images.create') }}" class="btn green">Nueva</a>
			@endcan
		</div>
		<table class="centered striped">
			<thead>
				<th width="100px">Imagen</th>
				<th>Titulo</th>
				<th>Texto alternativo</th>
				<th colspan="3">Acciones</th>
			</thead>
			<tbody>
				@foreach($images as $image)
					<tr>
						<td width="100px"><img src="{{ $image->url_path }}" class="responsive-img" width="100px" alt=""></td>
						<td>{{ $image->name }}</td>
						<td>{{ $image->alt }}</td>
						@can('images.edit')
						<td width="10px">
							<a href="{{ route('images.edit', $image->id) }}" class="btn orange">Editar</a>
						</td>
						@endcan
						@can('images.destroy')
						<td width="10px">{{ Form::model($image, ['route' => ['images.destroy', $image->id], 'method' => 'delete']) }}
								{{ Form::submit('Eliminar', ['class' => 'btn red']) }}
							{{ Form::close() }}
						</td>
						@endcan
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="center">
			{{ $images->render('pagination::default') }}
		</div>
	</div>
</main>
@endsection