@extends('layouts.app')
@include('header')

<section class="flex justify-center px-6 mt-6 items-center page-height mb-16">
    <div class="profile-container flex items-center justify-center flex-col bg-marine1 p-4 m-4 sm:w-2/4">
        <h6>Min profil</h6>
        <div class="profile-user-info flex flex-col gap-4 pt-4">
            <p class="p1">{{ $user['name'] }}</p>
            <p class="p1">{{ $user['email'] }}</p>
        </div>
    </div>
</section>

@include('footer')