@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container section">
		<div class="row">
			{{-- Ultimos Posts --}}
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<h4 class="green-text ">Ultimos Articulos</h4>
						<table>
							<thead>
								<th>Imagen</th>
								<th>Titulo</th>
							</thead>
							<tbody>
								@foreach($posts as $post)
									<tr>
										<td><img src="{{ $post->image->url_path }}" class="resposive-img" width="100px" alt=""></td>
										<td>{{ $post->name }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			{{-- Ultimas Categorías --}}
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<h4 class="green-text ">Ultimas Categorías</h4>
						<table>
							<thead>
								<th>Nombre</th>
								<th>URL</th>
							</thead>
							<tbody>
								@foreach($categories as $category)
									<tr>
										<td>{{ $category->name }}</td>
										<td>{{ $category->slug }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			{{-- Ultimas Imagenes --}}
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<h4 class="green-text ">Ultimas imagenes</h4>
						<table>
							<thead>
								<th>Imagen</th>
								<th>Titulo</th>
							</thead>
							<tbody>
								@foreach($images as $image)
									<tr>
										<td><img src="{{ $image->url_path }}" class="resposive-img" width="100px" alt=""></td>
										<td>{{ $image->name }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>

			{{-- Ultimos Mensajes --}}

			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<h4 class="green-text ">Ultimos mensajes</h4>
						<table>
							<thead>
								<th>Nombre</th>
								<th>Correo</th>
							</thead>
							<tbody>
								@foreach($messages as $message)
									<tr>
										<td>{{ $message->name }}</td>
										<td>{{ $message->email }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection