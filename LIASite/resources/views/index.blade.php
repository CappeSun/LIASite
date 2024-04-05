@extends('layouts.app')
@include('header')
@section('content')
    <section class="event-info-container page-height flex flex-col">
        <div class="hero bg-yrgoRed h-1/3 flex">
            <h4 class="self-center text-center px-6 text-white">Mingelevent hostad av Yrgo på Visual Arena Lindholmen</h4>
        </div>
        <div class="event-info text-padding">
            <h5 class="pb-6">Välkommen att träffa oss den 24 april kl 15- 17 </h5>
            <p class="p1">
                Mingel mellan bransch och studerande Webbutvecklare och Digital Designers på Yrgo<br><br>

                Välkomna på mingelevent för att hitta framtida medarbetare i ert företag eller bara jobba tillsammans under LIA. Ni kommer att träffa Webbutvecklare och Digital Designers från Yrgo som vill visa vad de har jobbat med under året och vi hoppas att ni hittar en match.<br><br>
                
                Ni som företag kan med fördel ta med någon form av identifikation för synlighet. Vi kommer att ha stationer där företag och studerande kan träffas.<br><br>
                
                Varmt välkomna önskar Webbutvecklare och Digital Designer!
            </p>
        </div>
    </section>
    <section class="event-location text-padding flex flex-col items-center {{-- h-1/2 --}} bg-marine4">
        <h5 class="text-center text-white mb-5">Vi ses på Visual Arena</h5>
        <div class="map-circle rounded-full bg-white h-64 w-64 mb-5">
            {{-- TODO: Add map-location --}}
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
        <p class="p1 mb-5">Låter detta intressant men det passar er inte i schemat? Registrera ert företag i vår företagspool för studenter att hitta LIA-platser</p>
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
