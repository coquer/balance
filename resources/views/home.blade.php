@extends('layouts.app')
@section('title', 'Balance - Your Financial Place')

@section('content')
@include('partials.overview')

@auth
<section class="section m-0">
    <div class="columns is-centered m-1">
        <div class="column is-6">
            <h4 class="title is-4">@lang('general.add-a-note')</h4>
            <task-form :types="{{$globalBalanceData['types']}}"></task-form>
        </div>
        <div class="column is-6">
            <h5 class="title is-5">@lang('general.my-notes')</h5>
                <tasks :tasks="{{$tasks}}"></tasks>
        </div>
    </div>
</section>
@endauth

@endsection
