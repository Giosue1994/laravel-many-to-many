<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<h1>Cars list</h1>
<div>
  <a href="{{route('cars.create')}}">Add new car</a>
</div>
<br>
<br>
@foreach ($cars as $car)
  <div>
    <a href="{{ route('cars.show', $car)}}" >{{$car->manifacturer}} {{ $car->engine}}</a>
    <form class="delete" action="{{ route('cars.destroy', $car) }}" method="post">
      @csrf
      @method('DELETE')

      <input type="submit" value="Delete">
    </form>
  </div>
  <hr>
@endforeach

<div class="box">
  <p>Vuoi davvero eliminare l'auto?</p>
  {{-- <br>
  <form action="{{ route('cars.destroy', $car) }}" method="post">
    @csrf
    @method('DELETE')

    <input type="submit" value="Si">
  </form>
  <input type="submit" value="No"> --}}
</div>

<script src="{{ asset('js/app.js') }}"></script>
