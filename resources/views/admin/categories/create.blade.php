@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container center section">
		<div class="card">
			<div class="card-content">
				<div class="center">
					<h4 class="green-text">Categoría</h4>
					{{ Form::open(['route' => 'categories.store', 'method' => 'post']) }}
						@include('admin.categories.partials.form')
					{{ Form::close() }}
				</div>
			</div>
		</div>
		
	</div>
</main>
@endsection