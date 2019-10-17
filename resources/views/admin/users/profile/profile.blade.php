@extends('layouts.dashboard')

@section('content')
<main class="dashboard">
	<div class="container section">
		<h3 class="green-text bold">Perfil</h3>
		<div class="card">
			<div class="card-content">
				<div class="row">
					<div class="col m4 s12">
						<img class="responsive-img" src="{{ asset('upload/avatar/'.Auth::user()->avatar) }}">
					</div>
					<div class="col m8 s12">
						<span class="card-title grey-text text-darken-3">{{ Auth::user()->name }}</span>
						<p><strong>Roles:</strong>
							<ul>
							@foreach($roles as $role)
								<li>
									<span class="grey-text text-darken-3">{{ $role->name }} - ({{ $role->description }})</span>
								</li>
							@endforeach
							</ul>
						</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
</main>
@endsection