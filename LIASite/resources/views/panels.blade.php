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
            <div><button class="checkbox-icon-confirmation" onclick="addFav(<?= $panels[$i]['id']; ?>)">Favorit</button></div>
            <?php } ?>
        </div>
    </div>
    <script type="text/javascript">
    async function addFav(id){
        let response = await fetch('http://localhost:8002/favorites/add', {
            method: 'POST',
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                id: id
            })
        });
    }
    </script>
</section>

@include('footer')