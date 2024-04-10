@extends('layouts.app')
<footer>
    <div class="footer-content flex flex-col p-6 gap-5">
        <p class="p1 text-lg leading-6">YRGO</p>
        <ul class="flex flex-col px-3 gap-5">
            <a href=""><p class="p2">Om Yrgo</p></a>
            <a href=""><p class="p2">Kontakt</p></a>
            <a href=""><p class="p2">För företag</p></a>
            <a href=""><p class="p2">GDPR</p></a>
            <a href=""><p class="p2">Matcha</p></a>
        </ul>
        <div class="py-8">
            <img src="{{ asset('images/yrgo.svg') }}" alt="yrgo logo">
        </div>
        <p class="footer-cppyright text-sm">© 2024 Yrgo, högre yrkesutbildning Göteborg</p>
    </div>
</footer>