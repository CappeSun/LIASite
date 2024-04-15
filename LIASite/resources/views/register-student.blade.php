@extends('layouts.app')
@include('header')

<section class="flex justify-center px-6 mt-6 items-center page-height page-height-desktop">
    <div class="register-container sm:w-2/3 bg-marine1">
        <h6>Skapa ett konto</h6>
        {{-- TODO: Add routes --}}
        <form action="{{ route('register-student') }}" method="post">
            @csrf
            <label class="p1" for="name">Namn</label>
            <input class="form-input" type="text" id="name" name="name" placeholder="Namn..." required>
        
            <label class="p1" for="email">E-postadress</label>
            <input class="form-input" type="email" id="studentEmail" name="email" placeholder="name@example.com" required>
        
            <label class="p1" for="password">Lösenord</label>
            <input class="form-input" type="password" id="studentPassword" name="password" placeholder="Lösenord" required>
        
            <button class="btn btn-2 next-btn mt-2" type="submit">Nästa</button>
        </form>
        <p class="text-center">Har du redan ett konto? <a href="{{ route('login') }}">Klicka här</a> för att logga in</p>
    </div>
</section>

@include('footer')