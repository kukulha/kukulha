{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="row">
	<div class="col m8 s12">

		<div class="input-field">
			{{ Form::label('name', 'Titulo*') }}
			{{ Form::text('name', null, ['id' => 'name']) }}
			@error ('name')
		    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
			@enderror
		</div>

		<div class="input-field">
			{{ Form::label('slug', 'URL*') }}
			{{ Form::text('slug', null, ['id' => 'slug']) }}
			@error ('slug')
		    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
			@enderror
		</div>


		<div class="input-field">
			{{ Form::label('category_id', 'Categoría*') }}
			<br>
			{{ Form::select('category_id' , $categories, null) }}
			@error ('category_id')
		    	<span class="helper-text red-text title" data-error="wrong">{{ $message }}</span>
			@enderror
		</div>

		<div class="input-field">
			{{ Form::label('excerpt', 'Extracto')}}
			{{ Form::text('excerpt', null) }}
		</div>

		<div class="input-field">
			{{ Form::textarea('body', null, ['id'=> 'body'])}}
		</div>

		<div class="input-field left">
			{{ Form::submit('Guardar', ['class' => 'btn green']) }}
		</div>
	</div>
	<div class="col m4 s12 center">
		<h5 class="green-text">Imagen</h5>
		<a href="#images" class="btn green center modal-trigger">Elegir imagen existente</a>
		<div class="file-field input-field">
			<p>Elegir Imagen nueva</p>
			<a href="">
				{{ Form::file('path', null, ['id' => 'file']) }}
			</a>
			@if($post ?? '')
				<img id="preview" src="{{ $post->image->url_path }}" class="responsive-img" alt="">
			@else
				<img id="preview" src="/img/default.png" class="responsive-img" alt="">
			@endif
		</div>
	</div>
</div>

<div id="images" class="modal">
	<div class="modal-content">
		<div class="row">
			@foreach($images as $image)
				<div class="col m4 s12">
					<p>
						<label>
							{{ Form::radio('image_id', $image->id) }}
							<img src="{{ $image->url_path}}" class="responsive-img" alt="">
						</label>
					</p>
				</div>
			@endforeach
		</div>
	</div>
	<div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
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

			ClassicEditor
    			.create( document.querySelector( '#body' ) )
    			.catch( error => {
        		console.error( error );
    		} );
		});
	</script>
@endsection