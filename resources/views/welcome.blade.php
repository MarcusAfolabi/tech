@extends('layouts.main')
@section('title', 'Webshop Technology')
@section('description', 'Webshop Tech is a dynamic startup agency dedicated to providing cutting-edge web, mobile, and marketing services')
@section('keywords', 'webshop, software, engineering, frontend, backend, design, development, craft, game, web, website, technology')
@section('main')
<main>
    <div class="home-wrapper-4">

        <x-hero :hero />

        <x-workflow :work />

        <x-feature :feat />

        <x-service :service />

        <x-portfolio :portfolio />

        <x-review :review />

        <x-approach :approach />

        <x-cta />

    </div>
</main>

@endsection