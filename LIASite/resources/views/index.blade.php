@extends('layouts.app')
@include('header')
@section('content')
    <section class="event-info-container bg-yrgoRed page-height flex flex-col justify-between p-6 sm:px-28 sm:py-16">
        <div class="hero flex flex-col gap-14">
            <p class="h5-2 text-white sm:text-4xl">Digital Designer, <br>Webbutvecklare, Yrgo</p>
            <h4 class="text-white sm:hidden">Mingelevent hostad av Yrgo på Visual Arena Lindholmen</h4>
            <h1 class="text-white hidden sm:block sm:mb-4">Mingelevent hostad av Yrgo på Visual Arena Lindholmen</h1>
            <div class="event-info">
                <p class="p2 text-white sm:w-1/2">
                    Välkomna på mingelevent för att hitta framtida medarbetare i ert företag eller bara jobba tillsammans under LIA. Ni kommer att träffa Webbutvecklare och Digital Designers från Yrgo som vill visa vad de har jobbat med under året och vi hoppas att ni hittar en match.
                    <br><br>
                    Ni som företag kan med fördel ta med någon form av identifikation för synlighet. Vi kommer att ha stationer där företag och studerande kan träffas.
                    <br><br>
                    Varmt välkomna önskar Webbutvecklare och Digital Designer!

                </p>
            </div>
        </div>
        <div class="fixed bottom-10 inset-x-0 flex justify-center z-50">
            <a href="{{ route('register-company') }}" class="btn-marine">Jag kommer</a>
        </div>        
    </section>

    <section class="event-location text-padding {{-- flex flex-col --}} bg-marine4 sm:px-28 grid grid-cols-1 sm:grid-cols-2 gap-3 sm:py-10">
        <h5 class="text-white mb-5 text-center sm:content-end sm:text-start order-1">Vi ses på Visual Arena</h5>
        <div class="map-circle rounded-full bg-white h-64 w-64 mb-5 flex justify-center items-center overflow-hidden order-2 sm:row-span-2 justify-self-center sm:ml-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4263.091519689307!2d11.9401479!3d57.7071868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464ff35a989e3903%3A0x6e2578f4d63f3cbc!2sVisual%20Arena%20Lindholmen!5e0!3m2!1ssv!2sse!4v1712323591140!5m2!1ssv!2sse" width="300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>        
        <p class="p2 text-white order-3 sm:w-3/4">Lorum ipsum ifon om plats och tid en gång till. Mer info om plats bus hållsplat och liknande. </p>
    </section>

    <section class="about-us text-padding flex flex-col sm:px-28">
        {{-- TODO: Add video --}}
        <div class="video-container sm:w-2/3 sm:self-center">
            <video src="{{ asset('videos/YRGO.mp4') }}" controls></video>
        </div>
    </section>
    <section class="register-company text-padding flex flex-col items-center bg-marine1 sm:px-28 sm:py-16">
        <h3 class="mb-5 leading-10 sm:leading-none text-center">Har du inte möjlighet att komma till eventet men det låter trevligt med en LIA-praktikant? Registrera ert företag i vår företagspool för studenter att hitta just ert företag!</h3>
        <button class="btn btn-1 sm:mt-3">Registrera</button>
    </section>
    <section class="edu-info text-padding flex flex-col gap-16 my-8 sm:px-28 sm:w-3/5">
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