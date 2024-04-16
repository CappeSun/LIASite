@extends('layouts.app')
@include('header')

<section class="flex justify-center px-6 mt-6 items-center page-height page-height-desktop">
    <div class="register-container sm:w-2/3 bg-marine1">
        <h6>Skapa ett konto</h6>
        {{-- TODO: Add routes --}}
        <form action="/account/create" method="post">
            @csrf
            <label class="p1" for="name">Namn</label>
            <input class="form-input" type="text" id="name" name="name" placeholder="Namn..." value="{{ old('name') }}" required>
        
            <label class="p1" for="email">E-postadress</label>
            <input class="form-input" type="email" id="studentEmail" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
        
            <label class="p1" for="password">Lösenord</label>
            <input class="form-input" type="password" id="studentPassword" name="password" placeholder="Lösenord" value="{{ old('password') }}" required>
        
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="level" value="0">
            <button class="btn btn-marine" type="submit">Nästa</button>
        </form>
        <p class="text-center">Har du redan ett konto? <a href="{{ route('login') }}">Klicka här</a> för att logga in</p>
    </div>
</section>

@include('footer')