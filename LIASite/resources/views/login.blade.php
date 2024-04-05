@extends('layouts.app')
@include('header')

<section class="login flex flex-col items-center mt-16">
    <h5 class="mb-9">Logga in</h5>
    <h5 class="mb-8">Jag är</h5>
    <a href="{{ route('index') }}"><button class="btn btn-3 bg-marine1 mb-6">student</button></a>
    <a href="{{ route('index') }}"><button class="btn btn-3 bg-marine1">företag</button></a>
</section>