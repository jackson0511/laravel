@extends('welcome')
@section('content')
    @csrf
    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Enter your username">
    <br>
    <label for="password">password</label>
    <input type="text" name="password" placeholder="Enter your password">
    <br>
    <button type="submit">Submit</button>
@endsection
