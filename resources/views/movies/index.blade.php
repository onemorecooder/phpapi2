@include('includes.navbar')

@if (isset($movie))
    <h1>{{ $movie['title'] }}</h1>
    <p>{{ $movie['overview'] }}</p>
    <a href="{{ route('movies.index') }}">Volver a la lista de películas</a>
@else
    <h1>Películas</h1>
    <form method="GET" action="{{ route('movies.index') }}">
        <label for="movie">Selecciona una película:</label>
        <select name="movie" id="movie">
            @foreach ($movies as $movie)
                <option value="{{ $movie['id'] }}">{{ $movie['title'] }}</option>
            @endforeach
        </select>
        <button type="submit">Ver detalles</button>
    </form>
@endif
