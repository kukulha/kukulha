@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container center section">
		<div class="card">
			<div class="card-content">
				<div class="center">
					<h4 class="green-text">Categoría</h4>
					{{ Form::model($category,['route' => ['categories.update', $category->id], 'method' => 'put']) }}
						@include('admin.categories.partials.form')
					{{ Form::close() }}
				</div>
			</div>
		</div>
		
	</div>
</main>
@endsection