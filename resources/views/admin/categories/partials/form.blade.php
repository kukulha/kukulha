<div class="row">
	<div class="col m8 offset-m2 s12">
		<div class="input-field">
			{{ Form::label('name', 'Titulo') }}
			{{ Form::text('name', null) }}
		</div>

		<div class="input-field">
			{{ Form::label('slug', 'URL') }}
			{{ Form::text('slug', null) }}
		</div>
		<div class="input-field left">
			{{ Form::submit('Guardar', ['class' => 'btn green']) }}
		</div>
	</div>
</div>

@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('#name, #slug').stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});
		});
	</script>
@endsection