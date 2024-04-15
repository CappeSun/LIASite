@extends('layouts.app')
@include('header')

<section class="login mt-12 p-6 flex justify-center">
    <div class="login-screen flex flex-col items-center">
        <p class="mb-9 font-semibold text-2xl sm:text-4xl">Logga in</p>
        <p class="mb-8 font-semibold text-2xl">Jag är</p>
        <button onclick="loginStudent()" class="btn btn-marine mb-6">student</button>
        <button onclick="loginCompany()" class="btn btn-marine">företag</button>
    </div>
    <div class="login-student register-container form-bg sm:w-2/4">
        <h6 class="text-center">Student</h6>
        {{-- TODO: Add routes --}}
        <form action="login" method="post">
            @csrf
            <label class="p1" for="email">E-postadress</label>
            <input class="form-input" type="email" id="companyEmail" name="email" placeholder="name@example.com" required>
        
            <label class="p1" for="password">Lösenord</label>
            <input class="form-input" type="password" id="companyPassword" name="password" placeholder="Lösenord" required>
        
            <button class="btn btn-marine" type="submit">Logga in</button>
        </form>
        <p class="text-center">Har du inte ett konto? <a href="{{ route('register-student') }}">Klicka här</a> för att registrera dig</p>
    </div>
    <div class="login-company register-container form-bg sm:w-2/4">
        <h6 class="text-center">Företag</h6>
        {{-- TODO: Add routes --}}
        <form action="login" method="post">
            @csrf
            <label class="p1" for="email">E-postadress</label>
            <input class="form-input" type="email" id="companyEmail" name="email" placeholder="name@example.com" required>
        
            <label class="p1" for="password">Lösenord</label>
            <input class="form-input" type="password" id="companyPassword" name="password" placeholder="Lösenord" required>
        
            <button class="btn btn-marine" type="submit">Logga in</button>
        </form>
        <p class="text-center">Har du inte ett konto? <a href="{{ route('register-company') }}">Klicka här</a> för att registrera dig</p>
    </div>
</section>