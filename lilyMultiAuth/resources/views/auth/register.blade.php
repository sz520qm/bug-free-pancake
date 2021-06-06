@extends('layouts.admindash-layout')

@section('content') 

<h1 class=" p-4">Add a Guest</h1>

    <form method="POST" action="{{ route('register') }}" class=" container p-4"> 
        
        @csrf
          
          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="name">Name</span>
            </div>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
          </div>

          @error('name')              
          <span class="invalid-feedback" role="alert"></span>
          {{ $message }}
          @enderror


          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="email">Email</span>
            </div>
            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
          </div>

          @error('email')              
          <span class="invalid-feedback" role="alert"></span>
          {{ $message }}
          @enderror

          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="password">Password</span>
            </div>
            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Email" >
          </div>

          @error('password')              
          <span class="invalid-feedback" role="alert"></span>
          {{ $message }}
          @enderror

          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="password">Password confirm</span>
            </div>
            <input name="password_confirmation" type="password" class="form-control" placeholder="Email">
          </div>

          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="language">Language</span>
            </div>
            <input type="text" class="form-control" placeholder="Language">
          </div>

          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="service">Service</span>
            </div>
            <input type="text" class="form-control" placeholder="Service">
          </div>
          
        

        <div class="input-group mt-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="room">Room:</label>
            </div>
            <select class="custom-select" id="">
              
           
            <option selected value="1">Room 1</option>
            <option value="2">Room 2</option>
            <option value="3">Room 3</option>
            <option value="4">Room 4</option>
            <option value="5">Room 5</option>
            <option value="6">Room 6</option>
            <option value="7">Room 7</option>
            <option value="8">Room 8</option>
            <option value="9">Room 9</option>
            <option value="10">Room 10</option>
            <option value="10">Room 11</option>
            <option value="10">Room 12</option>
            <option value="10">Room 13</option>
            <option value="10">Room 14</option>
            <option value="10">Room 15</option>
            </select>
          </div>

 
    
    <button type="submit" class="btn btn-primary mt-4">Add Guest</button>

</form>

@endsection