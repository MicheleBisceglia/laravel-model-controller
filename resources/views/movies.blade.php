@extends('layout.app')

@section('main-content')
<section class="movies my_scroll">
  <h1>Lista film disponibili</h1>
    <div class="container">
    @foreach ($movies as $item)
      <ul>
        <li>Titolo: {{$item->title}}</li>
          <li>Titolo Originale{{$item->original_title}}</li>
          <li>Nazionalit√†: {{$item->nationality}}</li>
          <li>Data: {{$item->date}}</li>
          <li>Voto: {{$item->vote}}</li>
      </ul> 
    @endforeach  
  </div>            
</section>
@endsection

