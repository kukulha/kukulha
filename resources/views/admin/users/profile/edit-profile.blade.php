@extends('layouts.dashboard')
 
@section('content')
<main class="dashboard">
  <div class="container">
    <div class="row">
        <div class="col m8 coffset-m2">
          
          <img width="100px" height="100px" src="{{ asset('upload/avatar/'.Auth::user()->avatar) }}">
          <h2>{{ Auth::user()->name }}</h2>
          <h4>Editar imágen de perfil</h4>
          {{ Form::open(['route' => ['user.profile.update'], 'files' => true, 'method' => 'PATCH']) }}
            <p>{{ Form::file('avatar') }}</p>
            <p>{{ Form::submit('Update', ['name' => 'submit']) }}</p>
          {{ Form::close() }}
      </div>
    </div>
  </div>
</main>
@endsection