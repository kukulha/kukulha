
<div class="row">
	<div class="col m10 s12 ">

		<div class="input-field">
			{{ Form::label('name', 'Rol*') }}
			{{ Form::text('name', null) }}
			@error ('name')
		    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
			@enderror
		</div>
		
		<div class="input-field">
			{{ Form::label('slug', 'URL*') }}
			{{ Form::text('slug', null) }}
			@error ('name')
		    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
			@enderror
		</div>

		<div class="input-field">
			{{ Form::label('description', 'Descripción')}}
			{{ Form::textarea('description', null, ['class' => 'materialize-textarea']) }}
		</div>
		<div class="divider"></div>
		<h5 class="green-text">Permiso Especial</h5>
		<div class="input-field">
			<p><label>{{ Form::radio('special', 'all-acces') }} <span>Acceso Total</span></label></p>
			<p><label>{{ Form::radio('special', 'no-acces') }} <span>Acceso Denegado</span></label></p>
		</div>
		<div class="divider"></div>
		<div class="input-field">
			<ul>
				@foreach($permissions as $permission)
					<li>
						<label>
							{{ Form::checkbox('permissions[]', $permission->id, null) }}
							<span>{{ $permission->name }}</span>
							<em>({{ $permission->description ?: 'Sin descripción' }})</em>
						</label>
					</li>
				@endforeach
			</ul>
		</div>

		<div class="input-field left">
			{{ Form::submit('Guardar', ['class' => 'btn green']) }}
		</div>
	</div>
</div>