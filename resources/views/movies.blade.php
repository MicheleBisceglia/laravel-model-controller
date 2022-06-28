<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>La lista dei film</h1>
      <div class="container">
      @foreach ($movies as $item)
        <ul>
            <li>Titolo: {{$item->title}}</li>
            <li>Titolo Originale{{$item->original_title}}</li>
            <li>Nazionalità: {{$item->nationality}}</li>
            <li>Data: {{$item->date}}</li>
            <li>Voto: {{$item->vote}}</li>
        </ul> 
      @endforeach  
      </div>
            
</body>
</html>

<style>/*debug*/
    h1 {
        text-align: center;
    }
    li {
        list-style: none;
    }
    ul {
        border: 1px black solid;
        width: calc(100% / 5);
        margin: 40px
    }
    .container {
        display: flex;
        flex-wrap: wrap;
        width: 80%;
        margin: 0 auto;
    }
</style>
