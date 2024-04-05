@extends('layouts.app')
<header>
    <nav class="nav flex justify-between w-screen items-center px-6 pt-16 pb-5 relative">
        <div class="logo">
            <a href="{{ route('index') }}"><img src="{{ asset('images/yrgo.svg') }}" alt="yrgo logo"></a>
        </div>
        <div class="hamburger-container">
            <img class="hamburger" src="{{ asset('images/hamburgare.svg') }}" alt="hamburger menu">
        </div>           
        <div class="drop-menu hidden text-center w-screen h-fit top-28 flex-col gap-2.5 inset-0 fixed bg-white shadow-lg z-10 px-6 pb-4 pt-6">
            {{-- Dropmenu links --}}
            <a href="{{ route('login') }}">Logga in</a>
            <a href="{{ route('index') }}">Hem</a>
            <a href="">Kontakta oss</a>
            <a href="">Om eventet</a>
            <a href="">GDPR</a>
        </div>
    </nav>
</header>