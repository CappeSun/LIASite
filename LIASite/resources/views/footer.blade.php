@extends('layouts.app')
<footer class="sm:px-28">
    <div class="footer-content {{-- flex flex-col --}} p-6 grid grid-cols-1 sm:grid-cols-2 gap-3 sm:py-10">
        <p class="p1 text-lg leading-6 sm:order-1">YRGO</p>
        <ul class="flex flex-col px-3 gap-6 sm:order-3 sm:my-3">
            <a href=""><p class="p2">Om Yrgo</p></a>
            <a href=""><p class="p2">Kontakt</p></a>
            <a href=""><p class="p2">För företag</p></a>
            <a href=""><p class="p2">GDPR</p></a>
            <a href=""><p class="p2">Matcha</p></a>
        </ul>
        <div class="py-8 justify-center items-center overflow-hidden sm:order-2 sm:row-span-2 sm:justify-self-center sm:ml-12 sm:content-center">
            <img class="sm:h-20" src="{{ asset('images/yrgo.svg') }}" alt="yrgo logo">
        </div>
        <p class="footer-cppyright text-sm sm:order-4">© 2024 Yrgo, högre yrkesutbildning Göteborg</p>
    </div>
</footer>