@extends('layouts.app')
<header>
    <nav class="nav flex justify-between w-screen items-center px-6 pt-16 pb-5 relative">
        <div class="logo">
            <img src="{{ asset('images/yrgo.svg') }}" alt="yrgo logo">
        </div>
        <div class="hamburger-container">
            <img class="hamburger" src="{{ asset('images/hamburgare.svg') }}" alt="hamburger menu">
        </div>           
        <div class="drop-menu hidden w-screen h-fit top-28 flex-col gap-4 inset-0 fixed bg-white shadow-lg z-10 px-6 pb-4">
            {{-- Dropmenu links --}}
            <a href="">Lorem</a>
            <a href="">Lorem</a>
            <a href="">Lorem</a>
        </div>
    </nav>
</header>