@extends ('layouts.app')

@section('title','sezione Informazioni')

@section ('content')
  <main>
    <h1> {{$prova}} </h1>
    {{ $articols }}
  </main>