
@extends('master')

@section('content')

    <a href="{{route('home')}}">Home</a>
    <h1>Wolrd tour</h1>
    <h2>Faça seu Login</h2>


    @if(session()->has('success'))
         {{session()->get('success')}}
    @endif


    @if (auth()->check())
        Already Logged in | {{auth()->uder()->FirstName}} | <a href="{{route('logout')}}">Login</a>
    @else

    @error('login')
        <span>{{ $message }}</span>
    @enderror

    <form action="{{route('login')}}"method="post">
        @csrf
        <input type="text" name="email" value="">
        @error('E-mail')
            <span>{{ $message }}</span>
        @enderror
        <input type="password" name="password" value="">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
        <button type="submit">Entrar</button>
    </form>


@endif
@endsection
