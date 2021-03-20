@if(5>10)
    <p>5 is lower than 5</p>
    @elseif(5==10)
       <p>5 is indeed lower than 10</p>
    @else
   <h1>All condition are wrong!</h1>
    @endif
@unless(empty($name))

    <h2>Name isn't empty</h2>
    @endunless
@empty(!$name)
    <h2>Name is empty!</h2>
@endempty

@isset($name)
    <h2>Name has been set</h2>
    @endisset
