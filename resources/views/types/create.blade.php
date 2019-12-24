@extends('layouts.app')
@section('title', 'יצירת תגית חדשה')

@section('content')
<div class="columns is-centered m-1">
    <div class="column is-5">
        <h1 class="title is-1-mobile">יצירת תגית חדשה</h1>
        <form action="{{route('types.store')}}" method="post">
            @csrf
            <b-field label="שם התגית">
                <b-input type="text" placeholder="שם התגית(חשמל/מים/גז וכו)" name="name"></b-input>
            </b-field>
            <b-field label="מספר צרכן">
                <b-input type="number" placeholder="מספר צרכן" name="consumer_number"></b-input>
            </b-field>
            <b-button type="is-success" outlined native-type="submit">אישור</b-button>
        </form>
    </div>
</div>
@endsection
