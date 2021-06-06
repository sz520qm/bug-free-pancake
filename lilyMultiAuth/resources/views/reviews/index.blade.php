@extends('layouts.admindash-layout')


@section('content') 
    <div class="p-5">     
        
    

        @foreach ($reviews as $review),
        
            <div class="">
                
      <h2><a style="text-decoration: none" href="">{{ $review->name }} in Room {{ $review->room }}</a></h2> 
      
      <div><h3>Rating done on {{ $review->created_at }}</h3></div>
          <p><b>Bedroom </b>  - <img src="dist/img/{{ $review->bedroom }}.png" width=80 alt=""> {{ $review->bedroom }} </p> 
          <p>  <b> Bathroom</b> -<img src="dist/img/{{ $review->bathroom }}.png" width=80 alt=""> {{ $review->bathroom }} </p>
          <p><b> Living room</b> -<img src="dist/img/{{ $review->livingroom }}.png" width=80 alt=""> {{ $review->livingroom }} </p>  
          <p> <b>Kitchen</b> -<img src="dist/img/{{ $review->kitchen }}.png" width=80 alt=""> {{ $review->kitchen }}  </p> 

            <p> <b>Flunks:</b> </p>

            @if ($review->flunks == null)

            <p>No duties ommitted</p>
                
            @else
                <ul>
                @foreach ($review->flunks as $flunk)
            
                <li>{{ $flunk }}</li>
                    
                @endforeach
            </ul> 
            @endif              

            </div>
        @endforeach  
        </div>
    </div>
   
    @endsection

