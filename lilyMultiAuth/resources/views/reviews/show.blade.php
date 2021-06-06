@extends('layouts.admindash-layout')


@section('content') 

<div class="">

<h1>{{ $review->name }} in Room {{ $review->room }}</h1>

<p class="bath-room"> Bathroom - {{ $review->bathroom }} stars</p>
<p class="bed-room"> Bedroom - {{ $review->bedroom }} stars</p>
<p class="living-room"> Living room - {{ $review->livingroom }} stars</p>
<p class="kitchen"> Kitchen - {{ $review->kitchen }} stars</p>

<ul>
    @if ($review->flunks == null)

    <p>No duties ommitted</p>
            
    @else
     @foreach ($review->flunks as $flunk)
    <li>{{ $flunk }}</li>
        
    @endforeach   
    @endif    
</ul>
<form action="/reviews/{{ $review->id }} " method="POST">
@csrf
@method('DELETE')
<button>Delete Review</button>
</form>

<div><a href="/reviews" class="back"> <- Back to Reviews</a></div>
</div>
   
@endsection