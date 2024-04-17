@extends('layouts.app')
<header>
    <nav class="nav flex justify-between items-center px-6 pt-16 pb-5 relative sm:py-14 sm:px-14">
        <div class="logo">
            <a href="{{ route('index') }}"><img src="{{ asset('images/yrgo.svg') }}" alt="yrgo logo"></a>
        </div>
        <div class="hamburger-container sm:hidden">
            <img class="hamburger" src="{{ asset('images/hamburgare.svg') }}" alt="hamburger menu">
        </div>           
        <div class="drop-menu hidden text-center w-screen h-fit top-28 flex-col gap-2.5 inset-0 fixed bg-white shadow-lg z-10 px-6 pb-4 pt-6">
            {{-- Dropmenu links --}}
            <a href="{{ route('favorites') }}">Mina favoriter</a>
            <a href="{{ route('matcha') }}">Matcha</a>
            <a href="{{ route('panels') }}">Paneler</a>
            <a href="{{ route('index') }}">Om eventet</a>
            <a href="{{ route('gdpr') }}">GDPR</a>
            <a href="{{ route('chat') }}">Chatt</a>
            @guest
                <a href="{{ route('login') }}">Logga in</a>
            @endguest
            @auth
                <a href="{{ route('logout') }}">Logga ut</a>
            @endauth
        </div>
        <div class="menu-desktop hidden sm:flex gap-9">
            {{-- Desktop-menu links --}}
            <a href="{{ route('favorites') }}">Mina favoriter</a>
            <a href="{{ route('matcha') }}">Matcha</a>
            <a href="{{ route('panels') }}">Paneler</a>
            <a href="{{ route('index') }}">Om eventet</a>
            <a href="{{ route('gdpr') }}">GDPR</a>
            <a href="{{ route('chat') }}">Chatt</a>
            @guest
                <a href="{{ route('login') }}">Logga in</a>
            @endguest
            @auth
                <a href="{{ route('logout') }}">Logga ut</a>
            @endauth
        </div>
    </nav>
</header>