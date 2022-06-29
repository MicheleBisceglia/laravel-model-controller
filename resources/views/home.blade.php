@extends('layout.app')

@section('main-content')
<section class="home-section my_scroll">
  <h1>Clicca qui è scegli tra una selezione di film consigliati fatta apposta per te!</h1>
  <div class="home-btn">
    <a href="{{ route('movies') }}">Inizia subito!</a>
  </div>
</section>
@endsection
