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
                           {{-- <img src="{{ asset('img/bedroom.png') }}"  style="max-height: 50px">   --}}
                          <label for="bedroom">Bedroom</label>
                           
                          <select name="bedroom" id="bedroom">
                              <option value="1">1 star</option>
                              <option value="2">2 stars</option>
                              <option value="3">3 stars</option>
                              <option value="4">4 stars</option>
                              <option value="5">5 stars</option>           
                          </select>
                         
                          <label for="bathroom">Bathroom</label>    
                          <select name="bathroom" id="bathroom">
                              <option value="1">1 star</option>
                              <option value="2">2 stars</option>
                              <option value="3">3 stars</option>
                              <option value="4">4 stars</option>
                              <option value="5">5 stars</option>           
                          </select>
                      
                          <label for="livingroom">Livingroom</label>    
                          <select name="livingroom" id="livingroom">
                              <option value="1">1 star</option>
                              <option value="2">2 stars</option>
                              <option value="3">3 stars</option>
                              <option value="4">4 stars</option>
                              <option value="5">5 stars</option>           
                          </select>
                       {{-- <img src="{{ asset('img/kitchen.png') }}"  style="max-height: 50px">  --}}
                          <label for="kitchen">Kitchen</label>    
                          <select name="kitchen" id="kitchen">
                              <option value="1">1 star</option>
                              <option value="2">2 stars</option>
                              <option value="3">3 stars</option>
                              <option value="4">4 stars</option>
                              <option value="5">5 stars</option>           
                          </select>
                        
                          </div>
                          
                          <fieldset>
                              <label> <h4>Duties Omitted</h4> </label>
                              <input type="checkbox" name="flunks[]" value=" bedroom floor dirty">Bedroom floor not cleaned <br />
                              <input type="checkbox" name="flunks[]" value=" bathroom floor dirty">Bathroom floor not cleaned<br />
                              <input type="checkbox" name="flunks[]" value=" livingroom floor dirty">Living room floor not cleaned <br />
                              <input type="checkbox" name="flunks[]" value=" kitchen floor dirty">Kitchen floor not cleaned<br />
                              <input type="checkbox" name="flunks[]" value="bed not made">Bed not correctly made<br />
                              <input type="checkbox" name="flunks[]" value="sheets dirty">Sheets not clean<br />
                              <input type="checkbox" name="flunks[]" value="dishes not packed">Dishes not packed away<br />
                              <input type="checkbox" name="flunks[]" value="toilet dirty">Toilet not cleaned<br />
                              <input type="checkbox" name="flunks[]" value="basin dirty">Basin not cleaned<br />
                              <input type="checkbox" name="flunks[]" value="shower dirty">Shower not cleaned<br />
                              <input type="checkbox" name="flunks[]" value="door unlocked"> Door not locked <br />
                              <input type="checkbox" name="flunks[]" value="alarm not set"> Alarm not set <br />           
                  
                          </fieldset>
                      {{-- <div><input type="submit">Send Review</div>   --}}
                      <button type="submit">Send Review</button>     
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>