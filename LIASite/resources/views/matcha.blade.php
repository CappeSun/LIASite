@extends('layouts.app')
@include('header')

<section class="h-screen">
    <div class="cards flex justify-center items-center">
        <div class="grid grid-cols-2 gap-4 bg-marine4">
            <?php for($i = 0; $i < count($panels); $i++){ ?>
            <a href="/panels/<?= $panels[$i]['name']; ?>">
                <div class="card p-6">
                    <h4 class="text-white"><?= $panels[$i]['name']; ?></h4>
                    <p class="text-white"><?= $panels[$i]['contact']; ?></p>
                    <p class="text-white"><?= $panels[$i]['location']; ?></p>
                    <div class="grid grid-cols-4 gap-1 pt-1.5 text-black">
                        {{-- competence here --}}
                        <?php $positions = explode('|', $panels[$i]['positions']); ?>
                        <?php foreach ($positions as $position){ ?>
                            <div class="checkbox-icon-confirmation">
                                <?= $position; ?>
                            </div>
                        <?php } ?>
                    </div>
                    <a class="text-white" href="/chats/<?= $users[$i]['name']; ?>">Chatta!</a>
                </div>
            </a>
            <?php } ?>
        </div>
    </div>
</section>

@include('footer')