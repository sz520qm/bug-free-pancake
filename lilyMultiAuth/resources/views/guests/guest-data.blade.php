@extends('layouts.admindash-layout')

@section('content') 

@foreach($users as $user)
<ul>
    <li><p>Name: {{ $user->name }}</p> <p>Email: {{ $user->email }}</p>  <p>Room: {{ $user->room }} </p> </li>
</ul>
@endforeach

@endsection