@extends('layouts.app')
@section('title', 'Balance - Your Financial Place')
@section('content')
<div class="columns">
    <div class="column is-4">
        <task-form :types="{{$types}}"></task-form>
    </div>
    <div class="column is-4">
        @auth
        <tasks :tasks="{{$tasks}}"></tasks>
        @endauth
    </div>
</div>
@endsection
