
<x-app-layout>

    <x-slot name="header">

    <div class="wrapper review-index">     

        @foreach ($reviews as $review)
            <div class="review-item">
                
      <h2><a style="text-decoration: none" href="/reviews/{{ $review->id }}">{{ $review->name }} in Room {{ $review->room }}</a></h2> 
      
      <div><h3>Ratings</h3></div>
          <p><b>Bedroom</b>  - {{ $review->bedroom }} star</p>
          <p>  <b> Bathroom</b> - {{ $review->bathroom }} star</p>
          <p><b> Living room</b> - {{ $review->livingroom }} star</p>  
          <p> <b>Kitchen</b> - {{ $review->kitchen }} star </p> 

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
    <div><a href="/dashboard" class="back">home</a></div>

</x-app-layout>