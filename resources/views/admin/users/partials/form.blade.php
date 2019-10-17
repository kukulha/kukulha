<div class="input-field">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null) }}
</div>

<div class="input-field">
	{{ Form::label('email', 'Correo Electrónico') }}
	{{ Form::email('email', null) }}
</div>
@if(Request::is('users/create'))
	<div class="input-field">
		{{ Form::label('password', 'Contraseña') }}
		{{ Form::password('password', null) }}
	</div>

	<div class="input-field">
		{{ Form::label('password_confirmation', 'Confirmar Contraseña') }}
		{{ Form::password('password_confirmation', null) }}
	</div>
@endif

<h5 class="green-text">Lista de Roles</h5>
<div class="input-field">
	<ul>
		@foreach($roles as $role)
			<li>
				<label>
					{{ Form::checkbox('roles[]', $role->id, null) }}
					<span>{{ $role->name }}</span>
					<em>({{ $role->description ?: 'Sin descripción' }})</em>
				</label>
			</li>
		@endforeach
	</ul>
</div>

<div class="input-field center">
	{{ Form::submit('Guardar', ['class' => 'btn green']) }}
</div>