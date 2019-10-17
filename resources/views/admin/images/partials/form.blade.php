<div class="row">
	<div class="col m8 s12">
		<div class="input-field">
			{{ Form::label('name', 'Titulo') }}
			{{ Form::text('name', null) }}
		</div>

		<div class="input-field">
			{{ Form::label('alt', 'Texto Alternativo') }}
			{{ Form::text('alt', null) }}
		</div>
		<div class="input-field left">
			{{ Form::submit('Guardar', ['class' => 'btn green']) }}
		</div>
	</div>
	<div class="col m4 s12">
		<div class="file-field input-field">
			<a href="">
				{{ Form::file('path', null, ['id' => 'path']) }}
			</a>

			@if($image ?? '')
				<img src="{{ $image->url_path }}" class="responsive-img" alt="">
			@else
				<img src="/img/default.png" class="responsive-img" alt="">
			@endif
		</div>
	</div>
</div>
