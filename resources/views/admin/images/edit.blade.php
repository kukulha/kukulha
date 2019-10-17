@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container center section">
		<div class="card">
			<div class="card-content">
				<div class="center">
					<h4 class="green-text">Imagenes</h4>
					{{ Form::model($image,['route' => ['images.update', $image->id], 'method' => 'put' , 'files' => 'true']) }}
						@include('admin.images.partials.form')
					{{ Form::close() }}
				</div>
			</div>
		</div>
		
	</div>
</main>
@endsection