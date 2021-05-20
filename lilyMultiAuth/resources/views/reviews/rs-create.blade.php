
@extends('layouts.app')

@section('content')  

<div class="wrapper review-details create-review">
  <h1>Отправить отзыв</h1> 
  <form action="/reviews" method="POST">
    @csrf
    <label for="name">Имя:</label>    
    <input type="text" id="name" name="name">
    <div><label for="room">Номер комнаты: </label>  
        <input type="integer" id="room" name="room"></div>       
    </select>   
    <div>
        <label for="bedroom">спальная комната: </label>    
        <select name="bedroom" id="bedroom">
            <option value="1">1 звезда</option>
            <option value="2">2 звезды</option>
            <option value="3">3 звезды</option>
            <option value="4">4 звезды</option>
            <option value="5">5 звезды</option>           
        </select> 
   
        <label for="bathroom">Ванная комната: </label>    
        <select name="bathroom" id="bathroom">
            <option value="1">1 звезда</option>
            <option value="2">2 звезды</option>
            <option value="3">3 звезды</option>
            <option value="4">4 звезды</option>
            <option value="5">5 звезды</option>           
        </select> 
        <label for="livingroom">Бездельничать:</label>    
        <select name="livingroom" id="livingroom">
            <option value="1">1 звезда</option>
            <option value="2">2 звезды</option>
            <option value="3">3 звезды</option>
            <option value="4">4 звезды</option>
            <option value="5">5 звезды</option>           
        </select> 
   
        <label for="kitchen">Кухня: </label>    
        <select name="kitchen" id="kitchen">
            <option value="1">1 звезда</option>
            <option value="2">2 звезды</option>
            <option value="3">3 звезды</option>
            <option value="4">4 звезды</option>
            <option value="5">5 звезды</option>           
        </select> 
        </div>
        <br>

        <fieldset>
<label><h4> Выпущенные обязанности</h4></label>
 <input type="checkbox" name="flunks[]" value="floor-bedroom">Пол в спальне не убран <br />
 <input type="checkbox" name="flunks[]" value="floor-bathroom">Пол в ванной не убран<br />
 <input type="checkbox" name="flunks[]" value="floor-livingroom">Пол в гостиной не убран <br />
 <input type="checkbox" name="flunks[]" value="floor-kitchen">Пол на кухне не убран<br />
 <input type="checkbox" name="flunks[]" value="bed">Кровать не заправлена<br />
 <input type="checkbox" name="flunks[]" value="sheets-dirty">Посуда не убирается в шкафy<br />
 <input type="checkbox" name="flunks[]" value="dishes">Блюда не упакованы<br />
 <input type="checkbox" name="flunks[]" value="toilet-dirty">Туалет не убран<br />
 <input type="checkbox" name="flunks[]" value="basin-dirty">Раковина в ванной не убрана<br />
 <input type="checkbox" name="flunks[]" value="shower-dirty">Душ не убран<br />
 <input type="checkbox" name="flunks[]" value="door-unlocked">Дверь не заперта <br />
 <input type="checkbox" name="flunks[]" value="alarm">сигнализация не установлен<br />
 

        </fieldset>

<button type="submit">Отправить отзыв</button>    
 


        
 
  </form>
  
  </div>


@endsection