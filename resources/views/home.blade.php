@extends('layouts.app')
@section('title', 'Balance - Your Financial Place')

@section('content')
@include('partials.overview')
<section class="section m-0">
    <div class="columns is-centered m-1">
        <div class="column is-6">
            <h4 class="title is-4">הוספת פתק</h4>
            @guest
                <a href="/login">התחברו</a> או <a href="/register">הירשמו חינם</a> בכדי להוסיף פתקים
            @endguest
            @auth
                <task-form :types="{{$types}}"></task-form>
            @endauth
        </div>
        <div class="column is-6">
            <h5 class="title is-5">הפתקים שלי</h5>
            @guest
                <a href="/login">התחברו</a> או <a href="/register">הירשמו חינם</a> בכדי לצפות  בפתקים
            @endguest
            @auth
                <tasks :tasks="{{$tasks}}"></tasks>
            @endauth
        </div>
    </div>
</section>
@endsection
