@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container section">
		<h3 class="green-text center">Lista de Articulos</h3>
		<div class="center">
			@can('posts.create')
			<a href="{{ route('posts.create') }}" class="btn green">Nuevo</a>
			@endcan
		</div>
		<table class="centered striped">
			<thead>
				<th width="100px">Imagen</th>
				<th>Titulo</th>
				<th>Extracto</th>
				<th colspan="3">Acciones</th>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						<td width="100px"><img src="{{ $post->image->url_path }}" class="responsive-img" width="100px" alt=""></td>
						<td>{{ $post->name }}</td>
						<td>{{ $post->excerpt }}</td>
						@can('posts.edit')
						<td width="10px">
							<a href="{{ route('posts.edit', $post->id) }}" class="btn orange">Editar</a>
						</td>
						@endcan
						@can('posts.destroy')
						<td width="10px">{{ Form::model($post, ['route' => ['posts.destroy', $post->id], 'method' => 'delete']) }}
								{{ Form::submit('Eliminar', ['class' => 'btn red']) }}
							{{ Form::close() }}
						</td>
						@endcan
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="center">
			{{ $posts->render('pagination::default') }}
		</div>
	</div>
</main>
@endsection