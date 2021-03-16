@extends ('layouts.app')

@section('title','sezione shop')

@section ('content')

  <h1>Shop</h1>

  <main>
    @foreach($articols as $articol)

      <h2> Nome:  {{ $articol->nome }} </h2>
      <h3>  Colore:  {{ $articol->colore }} </h3>
      <h4>  Taglia:  {{ $articol->taglia }} </h4>
      
    @endforeach
  </main>


@endsection