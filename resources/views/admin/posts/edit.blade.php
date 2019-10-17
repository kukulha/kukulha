@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container section">
		<div class="card">
			<div class="card-content">
				<h4 class="green-text">Crear Articulo</h4>
				{{ Form::model($post,['route' => ['posts.update', $post->id], 'method' => 'put' , 'files' => 'true']) }}
					@include('admin.posts.partials.form')
				{{ Form::close() }}
			</div>
		</div>
		
	</div>
</main>
@endsection