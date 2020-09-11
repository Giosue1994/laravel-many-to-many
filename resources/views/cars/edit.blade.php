<h1>Edit auto</h1>
{{-- Validazione form --}}
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

{{-- Add new car form --}}
<form action="{{route('cars.update', $car)}}" method="post">
  @csrf
  @method('PUT')
  <label>Manifacturer:</label><br>
  <input type="text" name="manifacturer" value="{{ old('manifacturer') ? old('manifacturer') : $car->manifacturer }}" placeholder="manifacturer">
  <br>
  <br>
  <label>Year:</label><br>
  <input type="number" name="year" value="{{ old('year') ? old('year') : $car->year}}" placeholder="year">
  <br>
  <br>
  <label>Engine:</label><br>
  <input type="text" name="engine" value="{{ old('engine') ? old('engine') : $car->engine}}" placeholder="engine">
  <br>
  <br>
  <label>Plate:</label><br>
  <input type="text" name="plate" value="{{ old('plate') ? old('plate') : $car->plate}}" placeholder="plate">
  <br>
  <br>
  <div class="chekboxes">
    <span>Type:</span>
    @foreach ($tags as $tag)
      <div>
        {{-- se il tag è contenuto nei tag di car checkalo altrimenti rimane vuoto --}}
        <input type="checkbox" name="tags[]" {{ $car->tags->contains($tag) ? 'checked' : '' }} value="{{$tag->id}}">
        <label>{{$tag->name}}</label>
      </div>
    @endforeach
  </div>
  <br>
  <br>
  <div>
    <select name="user_id">
      @foreach ($users as $user)
        {{-- se lu user id è uguale allo user id che ha l'auto selezionalo altrimenti rimane vuoto --}}
        <option {{ ($user->id == $car->user->id) ? 'selected' : '' }} value="{{$user->id}}">{{$user->name}}</option>
      @endforeach
    </select>
  </div>
  <br>
  <br>
  <input type="submit" name="" value="save">
</form>
<br>
<a href="{{ route('cars.index') }}">Home</a>
<br><br>
<a href="{{ route('cars.show', $car)}}">go back</a>
