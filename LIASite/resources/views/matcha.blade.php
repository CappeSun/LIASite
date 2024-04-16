@extends('layouts.app')
@include('header')

<section>
    @foreach ($users as $user)
        <li>{{ $user->name }} - {{ $user->email }}</li>
    @endforeach
</section>

@include('footer')