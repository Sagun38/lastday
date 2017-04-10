@extends('layouts.app')

@section('content')
<h1>Nous Contacter</h1>
<div class="container">
  {{ Form::open(['url' => '/contact']) }}
                  {{ Form::label('name', 'Nom') }}
                  <br>
                    {{ Form::text('name') }}
                    <br>
                    {{ Form::label('prenom', 'Prénom') }}
                    <br>
                    {{ Form::text('prenom') }}
                    <br>
                    {{ Form::label('email', 'Email') }}
                    <br>
                    {{ Form::text('email') }}
                    <br>
                    {{ Form::label('Message :')}}
                    <br>
                    {{ Form::textarea('content') }}
                    <br><br>
                    {{ Form::submit('Envoyer') }}
                  {{ Form::close() }}

</div>
@endsection
