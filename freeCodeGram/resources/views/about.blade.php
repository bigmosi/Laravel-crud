
@foreach($names as $name)
    <h2>The name is {{$name}}</h2>
@endforeach

@forelse($names as $name)
    <h2>The name is {{$name}}</h2>
@empty
    <h2>There are no names!</h2>

    @endforelse
