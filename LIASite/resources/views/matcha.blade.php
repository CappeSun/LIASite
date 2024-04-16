@extends('layouts.app')
@include('header')

<section>
    <div class="cards flex justify-center items-center">
        <div class="grid grid-cols-2 gap-4 bg-marine4">
            @foreach ($company as $info)
                <div class="card p-6">
                    <h4 class="text-white">{{ $info->name }}</h4>
                    <p class="text-white">{{ $info->email }}</p>
                    <p class="text-white">{{ $info->email }}</p>
                    <div class="grid grid-cols-4 gap-1 pt-1.5 text-black">
                        {{-- competence here --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('footer')