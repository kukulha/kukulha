@extends('layouts.app')

@section('content')
<header>
    <div class="hero">
        <div class="container section">
            <div class="row">
                <div class="col m3 s8 offset-s2">
                    <img src="/img/logo.png" class="responsive-img" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col m7 s12 offset-m5">
                    <h3 class="white-text bold">Nos renovamos para ti</h1>
                    <h5 class="green-text">Página en Construcción</h5>
                </div>
            </div>
            <section class="section form">
                {{ Form::open(['route' =>'messages.store', 'method' => 'post'])}}
                    <div class="row">
                        <div class="col m8 s12 opacity">
                            <div class="input-field">
                                {{ Form::label('name', 'Nombre Completo', ['class' => 'white-text']) }}
                                {{ Form::text('name', null, ['class' => 'white-text']) }}
                            </div>
                            <div class="input-field">
                                {{ Form::label('email', 'Correo Electrónico', ['class' => 'white-text']) }}
                                {{ Form::email('email', null, ['class' => 'white-text']) }}
                            </div>
                            <div class="input-field">
                                {{ Form::submit('Enviar', ['class' => 'btn green waves-effect'])}}
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </section>
        </div>
    </div>
</header>
<footer class="page-footer black overflow">
    <div class="container">
        <div class="row">
            <div class="col m6 s12">
                <p class="white-text"><i class="material-icons green-text left">map</i>Aldama #616 int. A, Tepatitlán de Morelos Jalisco</p>
            </div>
            <div class="col m6 s12 ">
                <p class="right-align rs">
                    <a href=""><i class="fab fa-twitter green-text"></i></a>
                    <a href=""><i class="fab fa-youtube green-text"></i></a>
                    <a href=""><i class="fab fa-facebook-f green-text"></i></a>
                    <a href=""><i class="fab fa-instagram green-text"></i></a>
                    <a href=""><i class="fab fa-linkedin green-text"></i></a>
                    
                </p>
            </div>
        </div>
    </div>
</footer>
@endsection
