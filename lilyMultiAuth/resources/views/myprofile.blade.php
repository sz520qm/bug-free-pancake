<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for user') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in as a user! <br>
                    Your name is: {{Auth::user()->name}} - Room {{Auth::user()->room}} <br>
                    Your email addrress: {{Auth::user()->email}}
                </div>
                <div class="wrapper review-details create-review">
                     
                    <form action="/reviews" method="POST">
                  
                      @csrf
                      <input style="display: none" type="text" value="{{Auth::user()->name}}" name="name">

                    <input style="display: none"  type="text" value="{{Auth::user()->room}}" name="room">

                    <div>
                        <fieldset class="rating1">
                            <legend class="text-2xl">Bedroom</legend>
                            <input type="radio" id="1star5" name="bedroom" value="5" /><label for="1star5" title="Rocks!">5</label>
                            <input type="radio" id="1star4" name="bedroom" value="4" /><label for="1star4" title="Pretty good">4</label>
                            <input type="radio" id="1star3" name="bedroom" value="3" /><label for="1star3" title="Meh">3</label>
                            <input type="radio" id="1star2" name="bedroom" value="2" /><label for="1star2" title="Kinda bad">2</label>
                            <input type="radio" id="1star1" name="bedroom" value="1" /><label for="1star1" title="Sucks big time">1</label>
                        </fieldset>
                    </div>
                <div class="duties"></div>
                    <div>
                        <fieldset class="rating1">
                            <legend class="text-2xl">Bathroom</legend>
                            <input type="radio" id="2star5" name="bathroom" value="5" /><label for="2star5" title="Rocks!"></label>
                            <input type="radio" id="2star4" name="bathroom" value="4" /><label for="2star4" title="Pretty good"></label>
                            <input type="radio" id="2star3" name="bathroom" value="3" /><label for="2star3" title="Meh"></label>
                            <input type="radio" id="2star2" name="bathroom" value="2" /><label for="2star2" title="Kinda bad"></label>
                            <input type="radio" id="2star1" name="bathroom" value="1" /><label for="2star1" title="Sucks big time"></label>
                        </fieldset>
                    </div>
                    <div class="duties"></div>
                    <div>
                        <fieldset class="rating1">
                            <legend class="text-2xl">Living Room</legend>
                            <input type="radio" id="3star5" name="livingroom" value="5" /><label for="3star5" title="Rocks!"></label>
                            <input type="radio" id="3star4" name="livingroom" value="4" /><label for="3star4" title="Pretty good"></label>
                            <input type="radio" id="3star3" name="livingroom" value="3" /><label for="3star3" title="Meh"></label>
                            <input type="radio" id="3star2" name="livingroom" value="2" /><label for="3star2" title="Kinda bad"></label>
                            <input type="radio" id="3star1" name="livingroom" value="1" /><label for="3star1" title="Sucks big time"></label>
                        </fieldset>
                    </div>
                    <div class="duties"></div>
                    <div >
                        <fieldset class="rating1">
                            <legend class="text-2xl">Kitchen</legend>
                            <input type="radio" id="4star5" name="kitchen" value="5" /><label for="4star5" title="Rocks!"></label>
                            <input type="radio" id="4star4" name="kitchen" value="4" /><label for="4star4" title="Pretty good"></label>
                            <input type="radio" id="4star3" name="kitchen" value="3" /><label for="4star3" title="Meh"></label>
                            <input type="radio" id="4star2" name="kitchen" value="2" /><label for="4star2" title="Kinda bad"></label>
                            <input type="radio" id="4star1" name="kitchen" value="1" /><label for="4star1" title="Sucks big time"></label>
                        </fieldset>
                    </div>

                     <div class="duties"></div>

                          <div> 
                              
                            <strong><h2 style="font-size: 30px" class="duties">Duties Omitted</h2></strong>
                          <fieldset class="duties">
                          
                              <input type="checkbox" name="flunks[]" value=" bedroom floor dirty"> Bedroom floor not cleaned <br />
                              <input type="checkbox" name="flunks[]" value=" bathroom floor dirty"> Bathroom floor not cleaned<br />
                              <input type="checkbox" name="flunks[]" value=" livingroom floor dirty"> Living room floor not cleaned <br />
                              <input type="checkbox" name="flunks[]" value=" kitchen floor dirty"> Kitchen floor not cleaned<br />
                              <input type="checkbox" name="flunks[]" value="bed not made"> Bed not correctly made<br />
                              <input type="checkbox" name="flunks[]" value="sheets dirty"> Sheets not clean<br />
                              <input type="checkbox" name="flunks[]" value="dishes not packed"> Dishes not packed away<br />
                              <input type="checkbox" name="flunks[]" value="toilet dirty"> Toilet not cleaned<br />
                              <input type="checkbox" name="flunks[]" value="basin dirty"> Basin not cleaned<br />
                              <input type="checkbox" name="flunks[]" value="shower dirty"> Shower not cleaned<br />
                              <input type="checkbox" name="flunks[]" value="door unlocked"> Door not locked <br />
                              <input type="checkbox" name="flunks[]" value="alarm not set"> Alarm not set <br />           
                  
                          </fieldset></div>
                      {{-- <div><input type="submit">Send Review</div>   --}}
                      <button type="submit">Send Review</button>     
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>