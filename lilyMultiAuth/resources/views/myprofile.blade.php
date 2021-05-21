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
                <div>                  
                                            
                    <form action="/reviews" method="POST">
                  
                      @csrf
                      <input style="display: none" type="text" value="{{Auth::user()->name}}" name="name">

                    <input style="display: none"  type="text" value="{{Auth::user()->room}}" name="room">                 
                   <div>
                            <fieldset class="" id="kitchen" name="kitchen">kitchen       
								<input type="radio" id="kitchen" name="kitchen" value="5" /><label class = "full" for="kitchen"></label>								
								<input type="radio" id="kitchen" name="kitchen" value="4" /><label class = "full" for="kitchen"></label>								
								<input type="radio" id="kitchen" name="kitchen" value="3" /><label class = "full" for="kitchen"></label>								
								<input type="radio" id="kitchen" name="kitchen" value="2" /><label class = "full" for="kitchen"></label>								
								<input type="radio" id="kitchen" name="kitchen" value="1" /><label class = "full" for="kitchen"></label>								
							</fieldset>

                            <fieldset class="" id="bathroom" name="bathroom">bathroom
								<input type="radio" id="bathroom" name="bathroom" value="5" /><label class = "full" for="bathroom"></label>								
								<input type="radio" id="bathroom" name="bathroom" value="4" /><label class = "full" for="bathroom"></label>								
								<input type="radio" id="bathroom" name="bathroom" value="3" /><label class = "full" for="bathroom"></label>								
								<input type="radio" id="bathroom" name="bathroom" value="2" /><label class = "full" for="bathroom"></label>								
								<input type="radio" id="bathroom" name="bathroom" value="1" /><label class = "full" for="bathroom"></label>								
							</fieldset>

                            <fieldset class="" id="livingroom" name="livingroom">livingroom
								<input type="radio" id="livingroom5" name="livingroom" value="5" /><label class = "full" for="livingroom"></label>								
								<input type="radio" id="livingroom4" name="livingroom" value="4" /><label class = "full" for="livingroom"></label>								
								<input type="radio" id="livingroom" name="livingroom" value="3" /><label class = "full" for="livingroom"></label>								
								<input type="radio" id="livingroom" name="livingroom" value="2" /><label class = "full" for="livingroom"></label>								
								<input type="radio" id="livingroom" name="livingroom" value="1" /><label class = "full" for="livingroom"></label>								
							</fieldset>

                            <fieldset class="" id="bedroom" name="bedroom">bedroom
								<input type="radio" id="bedroom" name="bedroom" value="5" /><label class = "full" for="bedroom"></label>								
								<input type="radio" id="bedroom" name="bedroom" value="4" /><label class = "full" for="bedroom"></label>								
								<input type="radio" id="bedroom" name="bedroom" value="3" /><label class = "full" for="bedroom"></label>								
								<input type="radio" id="bedroom" name="bedroom" value="2" /><label class = "full" for="bedroom"></label>								
								<input type="radio" id="bedroom" name="bedroom" value="1" /><label class = "full" for="bedroom"></label>								
							</fieldset>
                        <div>
                            <fieldset class="star-rating">
                                <legend class="star-rating__title">Your rating:</legend>
                                <div class="star-rating__stars">
                                  <input class="star-rating__input" type="radio" name="rating" value="1" id="rating-1" />
                                  <label class="star-rating__label" for="rating-1" aria-label="One"></label>
                                  <input class="star-rating__input" type="radio" name="rating" value="2" id="rating-2" />
                                  <label class="star-rating__label" for="rating-2" aria-label="Two"></label>
                                  <input class="star-rating__input" type="radio" name="rating" value="3" id="rating-3" />
                                  <label class="star-rating__label" for="rating-3" aria-label="Three"></label>
                                  <input class="star-rating__input" type="radio" name="rating" value="4" id="rating-4" />
                                  <label class="star-rating__label" for="rating-4" aria-label="Four"></label>
                                  <input class="star-rating__input" type="radio" name="rating" value="5" id="rating-5" />
                                  <label class="star-rating__label" for="rating-5" aria-label="Five"></label>
                                  <div class="star-rating__focus"></div>
                                </div>
                              </fieldset>
                        
                              <fieldset class="star-rating">
                                <legend class="star-rating__title">Rate your review:</legend>
                                <div class="star-rating__stars">
                                  <input class="star-rating__input" type="radio" name="review" value="1" id="review-1" />
                                  <label class="star-rating__label" for="review-1" aria-label="One"></label>
                                  <input class="star-rating__input" type="radio" name="review" value="2" id="review-2" />
                                  <label class="star-rating__label" for="review-2" aria-label="Two"></label>
                                  <input class="star-rating__input" type="radio" name="review" value="3" id="review-3" />
                                  <label class="star-rating__label" for="review-3" aria-label="Three"></label>
                                  <input class="star-rating__input" type="radio" name="review" value="4" id="review-4" />
                                  <label class="star-rating__label" for="review-4" aria-label="Four"></label>
                                  <input class="star-rating__input" type="radio" name="review" value="5" id="review-5" />
                                  <label class="star-rating__label" for="review-5" aria-label="Five"></label>
                                  <div class="star-rating__focus"></div>
                                </div>
                              </fieldset>
                        
                              <fieldset class="star-rating">
                                <legend class="star-rating__title">Your feedback:</legend>
                                <div class="star-rating__stars">
                                  <input class="star-rating__input" type="radio" name="feedback" value="1" id="feedback-1" />
                                  <label class="star-rating__label" for="feedback-1" aria-label="One"></label>
                                  <input class="star-rating__input" type="radio" name="feedback" value="2" id="feedback-2" />
                                  <label class="star-rating__label" for="feedback-2" aria-label="Two"></label>
                                  <input class="star-rating__input" type="radio" name="feedback" value="3" id="feedback-3" />
                                  <label class="star-rating__label" for="feedback-3" aria-label="Three"></label>
                                  <input class="star-rating__input" type="radio" name="feedback" value="4" id="feedback-4" />
                                  <label class="star-rating__label" for="feedback-4" aria-label="Four"></label>
                                  <input class="star-rating__input" type="radio" name="feedback" value="5" id="feedback-5" />
                                  <label class="star-rating__label" for="feedback-5" aria-label="Five"></label>
                                  <div class="star-rating__focus"></div>
                                </div>
                              </fieldset>
                        
                            </form>
                        
                   
            <div>
                          <fieldset>
                              <label> <h4>Duties Omitted</h4> </label><br>
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
                  
                          </fieldset >
                        </div>
                        </div>

                    
                            <button type="submit">Send Review</button>
                    </div>     
                    </form>
         </div>
    </div>
</x-app-layout>