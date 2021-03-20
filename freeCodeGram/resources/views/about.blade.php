@if(5>10)
    <p>5 is lower than 5</p>
    @elseif(5==10)
       <p>5 is indeed lower than 10</p>
    @else
    <P>All condition are wrong!</P>
    @endif
@unless(empty($name))

    <h2>Name isn't empty</h2>

    @endunless
