<h1>Dettagli Auto</h1>

<h2> {{ $car->manifacturer}} {{ $car->engine }}</h2>
<h3>Type:</h3>
<ul>
  @foreach ($car->tags as $tag)
    <li>{{$tag->name}}</li>
  @endforeach
</ul>

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
<a href="{{ route('cars.index')}}">go back</a>
