@extends('layouts.app')
@include('header')

<section>
    <div class="cards flex justify-center items-center">
        <div class="grid grid-cols-2 gap-4 bg-marine4">
            @foreach ($panel as $item)
                <div class="card p-6">
                    <h4 class="text-white">{{ $item['name'] }}</h4>
                    <p class="text-white">{{ $item['email'] }}</p>
                    <p class="text-white">{{ $item['location'] }}</p>
                    <div class="grid grid-cols-4 gap-1 pt-1.5 text-black">
                        {{-- competence here --}}
                        @foreach ($item['tasks'] as $task)
                            <div class="checkbox-icon-confirmation">
                                {{ $task }}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('footer')