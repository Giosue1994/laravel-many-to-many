<h1>Dettagli Auto</h1>

<h2> {{ $car->manifacturer}} {{ $car->engine }}</h2>

@if (!empty($car->tags))
  <ul>
    @foreach ($car->tags as $tag)
      <li>{{$tag->name}}</li>
    @endforeach
  </ul>
@endif

<h3>Anno e targa:</h3>
<ul>
  <li>Year: {{ $car->year }}</li>
  <li>Plate: {{ $car->plate }}</li>
</ul>

<h2>Owner details</h2>
<p>
  <b>{{ $car->user->name}}</b>
</p>
<p>
  For contacts: <br>
  <i>{{ $car->user->email}}</i>
</p>
<a href="{{ route('cars.edit', $car)}}">Edit cars</a>
<br><br>
<a href="{{ route('cars.index')}}">Home</a>
