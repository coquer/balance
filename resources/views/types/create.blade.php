@extends('layouts.app')
@section('title'){{__('general.new-tag')}}@endsection

@section('content')
<div class="columns is-centered m-1">
    <div class="column is-5">
        <h1 class="title is-1-mobile">{{__('general.new-tag')}}</h1>
        <form action="{{route('types.store')}}" method="post">
            @csrf
            <b-field label="{{__('general.new-tag-name')}}">
                <b-input type="text" placeholder="{{__('general.new-tag-name')}}" name="name"></b-input>
            </b-field>
            <b-field label="{{__('general.new-tag-consumer-number')}}">
                <div class="control">
                    <b-input type="number" placeholder="{{__('general.new-tag-consumer-number')}}" name="consumer_number"></b-input>
                    <p class="help is-danger" style="text-align: right">{{__('general.consumer-number-help')}}</p>
                </div>
            </b-field>
            <b-button type="is-fullwidth is-success" outlined native-type="submit">{{__('general.bill-form-submit')}}</b-button>
        </form>
    </div>
</div>
@endsection
