@extends('layouts.app')
@include('header')

<section>
    <div class="cards flex justify-center items-center">
        <div class="grid grid-cols-2 gap-4 bg-marine4">
            @foreach ($panels as $panel)
            <a href="/panels/<?= $panel['name']; ?>">
                <div class="card p-6">
                    <h4 class="text-white">{{ $panel['name'] }}</h4>
                    <p class="text-white">{{ $panel['contact'] }}</p>
                    <p class="text-white">{{ $panel['location'] }}</p>
                    <div class="grid grid-cols-4 gap-1 pt-1.5 text-black">
                        {{-- competence here --}}
                        <?php $positions = explode('|', $panel['positions']); ?>
                        <?php foreach ($positions as $position){ ?>
                            <div class="checkbox-icon-confirmation">
                                <?= $position; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

@include('footer')