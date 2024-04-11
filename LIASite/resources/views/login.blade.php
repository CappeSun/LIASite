@extends('layouts.app')
@include('header')

<section class="login mt-16">
    <div class="login-screen flex flex-col items-center">
        <h5 class="mb-9">Logga in</h5>
        <h5 class="mb-8">Jag är</h5>
        <button onclick="loginStudent()" class="btn btn-2 next-btn text-white mb-6">student</button>
        <button onclick="loginCompany()" class="btn btn-2 next-btn text-white">företag</button>
    </div>
    <div class="login-student register-container form-bg mx-6">
        <h6 class="text-center">Student</h6>
        {{-- TODO: Add routes --}}
        <form action="{{-- {{ route('register') }} --}}" method="post">
            @csrf
            <label class="p1" for="email">E-postadress</label>
            <input class="form-input" type="email" id="companyEmail" name="email" placeholder="name@example.com" required>
        
            <label class="p1" for="password">Lösenord</label>
            <input class="form-input" type="password" id="companyPassword" name="password" placeholder="Lösenord" required>
        
            <button class="btn btn-2 next-btn mt-2" type="submit">Logga in</button>
        </form>
        <p class="text-center">Har du inte ett konto? <a href="{{ route('register-student') }}">Klicka här</a> för att registrera dig</p>
    </div>
    <div class="login-company register-container form-bg mx-6">
        <h6 class="text-center">Företag</h6>
        {{-- TODO: Add routes --}}
        <form action="{{-- {{ route('register') }} --}}" method="post">
            @csrf
            <label class="p1" for="email">E-postadress</label>
            <input class="form-input" type="email" id="companyEmail" name="email" placeholder="name@example.com" required>
        
            <label class="p1" for="password">Lösenord</label>
            <input class="form-input" type="password" id="companyPassword" name="password" placeholder="Lösenord" required>
        
            <button class="btn btn-2 next-btn mt-2" type="submit">Logga in</button>
        </form>
        <p class="text-center">Har du inte ett konto? <a href="{{ route('register-company') }}">Klicka här</a> för att registrera dig</p>
    </div>
</section>