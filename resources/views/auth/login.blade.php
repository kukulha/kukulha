@extends('layouts.app')

@section('content')
<main class="black">
    <div class="valign-wrapper">
        <div class="container">
            <div class="center section">
                <img src="/img/logo.png" alt="">
            </div>
            <div class="row">
                <div class="col m8 s12 offset-m2">
                    <div class="card">
                        <div class="card-content">
                            <h4 class="center bold">Login</h4>
                            {{ Form::open(['route' => 'login', 'method' => 'post']) }}
                                <div class="input-field">
                                    {{ Form::label('email', 'Correo Electrónico') }}
                                    {{ Form::email('email', null) }}
                                </div>
                                <div class="input-field">
                                    {{ Form::label('password', 'Contraseña') }}
                                    {{ Form::password('password', null) }}
                                </div>
                                <div class="input-field">
                                    {{ Form::submit('Login', ['class' => 'btn green']) }}
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
