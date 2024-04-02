@extends('layouts.app')
@include('header')

<section class="register-container">
    <h6>Student</h6>
    {{-- TODO: Add routes --}}
    <form action="{{-- {{ route('register') }} --}}" method="post">
        @csrf
        <label class="p1" for="name">Namn</label>
        <input class="form-input" type="text" id="name" name="name" placeholder="Namn..." required>
    
        <label class="p1" for="email">E-postadress</label>
        <input class="form-input" type="email" id="email" name="email" placeholder="name@example.com" required>
    
        <label class="p1" for="password">Lösenord</label>
        <input class="form-input" type="password" id="password" name="password" placeholder="Lösenord" required>
    
        <button class="btn btn-2 bg-marine3 text-marine1" type="submit">Nästa</button>
    </form>
    <p>Har du redan ett konto? <a href="#{{-- ADD LINK TO lOGIN --}}">Klicka här</a> för att logga in</p>
</section>