@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container section">
		<h3 class="green-text center">Lista de Categorías</h3>
		<div class="center">
			@can('categories.create')
			<a href="{{ route('categories.create') }}" class="btn green">Nueva</a>
			@endcan
		</div>
		<table class="centered striped">
			<thead>
				<th>Titulo</th>
				<th>URL</th>
				<th colspan="3">Acciones</th>
			</thead>
			<tbody>
				@foreach($categories as $category)
					<tr>
						<td>{{ $category->name }}</td>
						<td>{{ $category->slug }}</td>
						@can('categories.edit')
						<td width="10px">
							<a href="{{ route('categories.edit', $category->id) }}" class="btn orange">Editar</a>
						</td>
						@endcan
						@can('categories.destroy')
						<td width="10px">{{ Form::model($category, ['route' => ['categories.destroy', $category->id], 'method' => 'delete']) }}
								{{ Form::submit('Eliminar', ['class' => 'btn red']) }}
							{{ Form::close() }}
						</td>
						@endcan
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="center">
			{{ $categories->render('pagination::default') }}
		</div>
	</div>
</main>
@endsection