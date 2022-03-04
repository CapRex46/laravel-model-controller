@foreach($data as $movie)
    <div class="container">
        <h1>Titolo: {{ $movie->title}}</h1>
        <p>Nazionalità{{ $movie->nationality}}</p>
        <p>Voto: {{ $movie->vote }}</p>
        <p>Data uscita: {{ $movie->date }}</p>
    </div>
@endforeach