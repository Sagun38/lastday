@extends('layouts.app')

@section('content')
  <div class="titleContainer"><h2 class="titlePage">Voici les messages envoyés par les visiteurs</h2></div>
  <div class="mainContainer">
    @foreach ($messages as $message)
      <div class="containerMessage">
        <h4>{{$message->name}}</h4>
        <p>Email: {{$message->email}}</p>
        <p>Message: {{$message->content}}</p>
      </div>
        <br>
    @endforeach
  </div>

@endsection
