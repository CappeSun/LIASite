@extends('layouts.app')
@include('header')
@section('content')
    <section class="event-info-container bg-yrgoRed page-height flex flex-col justify-between p-6">
        <div class="hero flex flex-col gap-14">
            <p class="h5-2 text-white">Digital Designer, <br>Webbutvecklare, Yrgo</p>
            <h4 class="text-white">Mingelevent hostad av Yrgo på Visual Arena Lindholmen</h4>
            <div class="event-info">
                <p class="p2 text-white">
                    Välkomna på mingelevent för att hitta framtida medarbetare i ert företag eller bara jobba tillsammans under LIA. Ni kommer att träffa Webbutvecklare och Digital Designers från Yrgo som vill visa vad de har jobbat med under året och vi hoppas att ni hittar en match. 
                </p>
            </div>
        </div>
        <div class="fixed bottom-10 inset-x-0 flex justify-center z-50">
            <a href="{{ route('register-company') }}" class="btn-marine">Jag kommer</a>
        </div>        
    </section>
    <section class="event-location text-padding flex flex-col items-center {{-- h-1/2 --}} bg-marine4">
        <h5 class="text-center text-white mb-5">Vi ses på Visual Arena</h5>
        <div class="map-circle rounded-full bg-white h-64 w-64 mb-5 flex justify-center items-center overflow-hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4263.091519689307!2d11.9401479!3d57.7071868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464ff35a989e3903%3A0x6e2578f4d63f3cbc!2sVisual%20Arena%20Lindholmen!5e0!3m2!1ssv!2sse!4v1712323591140!5m2!1ssv!2sse" width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
        <p class="p1 text-white">Lorum ipsum ifon om plats och tid en gång till. Mer info om plats bus hållsplat och liknande. </p>
    </section>
    <section class="about-us text-padding flex flex-col">
        <h6 class="mb-1 font-medium">Vilka vi är</h6>
        <p class="p2 mb-6">Lorum ipsum text om oss och om våra två olika program och vad det är vi gör. Lorum ipsum text om oss och om våra två olika program och vad det är vi gör.</p>
        {{-- TODO: Add video --}}
        <div class="video-container">
            <div class="VIDEO HERE w-full h-44 bg-gray-500"></div>
        </div>
    </section>
    <section class="register-company text-padding flex flex-col items-center bg-marine1">
        <h5 class="mb-5 leading-7 text-center">Låter detta intressant men det passar er inte i schemat? Registrera ert företag i vår företagspool för studenter att hitta LIA-platser</h5>
        <button class="btn btn-1">Registrera</button>
    </section>
    <section class="edu-info text-padding flex flex-col gap-16 my-8">
        <div class="DD">
            <h6 class="mb-1 font-medium">DD</h6>
            <p class="p2">Som Digital Designer arbetar du med UI-design (User Interface), typografi, UX (User Experience), 3D och motion design. Du designar digitala koncept och produkter: allt ifrån innovativa helhetslösningar till delar eller redesign av en existerande produkt eller tjänst.</p>
        </div>
        <div class="WU">
            <h6 class="mb-1 font-medium">Webb</h6>
            <p class="p2">Som webbutvecklare jobbar du med att utveckla produkter och tjänster för webben. Det kan handla om webbplatser, webbapplikationer eller e-handelssystem.</p>
        </div>
    </section>
    @include('footer')
@endsection
<!--
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIASite</title>
</head>
<body>
    <h1>Yup, seems to work</h1>
    <form action="/panels/update" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PATCH">
        <button>Test</button>
    </form>
    <form action="/user/create" method="post">
        <input type="text" name="name" value="{{ old('name') }}">
        <input type="text" name="email" value="{{ old('email') }}">
        <input type="text" name="password" value="{{ old('password') }}">
        <input type="hidden" name="level" value="1">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button>Create User</button>
    </form>
    <form action="/login" method="post">
        <input type="text" name="email" value="{{ old('email') }}">
        <input type="text" name="password">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button>Login</button>
    </form>
    <form action="/logout" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button>Logout</button>
    </form>
    <form action="/panels/create" method="post">
        <input type="text" name="name" value="{{ old('name') }}">
        <input type="text" name="email" value="{{ old('email') }}">
        <input type="text" name="location" value="{{ old('location') }}">
        <input type="text" name="area" value="{{ old('area') }}">
        <input type="text" name="positions" value="{{ old('positions') }}">
        <input type="text" name="desc" value="{{ old('desc') }}">
        <input type="text" name="size" value="{{ old('size') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button>Create Panel</button>
    </form>
    <form action="/panels/update" method="post">
        <input type="text" name="name" value="{{ old('name') }}">
        <input type="text" name="email" value="{{ old('email') }}">
        <input type="text" name="location" value="{{ old('location') }}">
        <input type="text" name="area" value="{{ old('area') }}">
        <input type="text" name="positions" value="{{ old('positions') }}">
        <input type="text" name="desc" value="{{ old('desc') }}">
        <input type="text" name="size" value="{{ old('size') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PATCH">
        <button>Update Panel</button>
    </form>
    <form action="/panels/delete" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button>Delete Panel</button>
    </form>
</body>
</html> -->
