@extends('layouts.app')
@section('title', 'יצירת פעילות חדשה')

@section('content')
<div class="columns is-centered m-1">
    <div class="column is-5">
        <h1 class="title is-1-mobile">יצירת פעילות חדשה</h1>
        <form action="{{route('activities.store')}}" method="post">
            @csrf
            <b-field label="סוג תשלום">
                <b-select placeholder="סוג תשלום"  name="type_id" style="text-align: right">
                    @forelse($types as $type)
                        <option value="{{$type->id}}">{{ $type->name }}</option>
                        @empty
                        <option>עדיין לא יצרתם תגיות כלשהן.</option>
                    @endforelse
                </b-select>
            </b-field>
            <b-field label="הסכום ששולם">
                <b-input type="number" placeholder="הסכום ששולם" name="amount" step="0.01"></b-input>
            </b-field>
            <b-field label="אסמכתא/אישור תשלום">
                <b-input type="number" placeholder="מספר אסמכתא או אישור תשלום" name="confirmation"></b-input>
            </b-field>
            <b-field label="מספר החשבונית/ספח ששולמה">
                <b-input type="number" placeholder="מספר החשבונית/ספח ששולמה" name="bill_id"></b-input>
            </b-field>
            <b-field label="מתי זה שולם?">
                <input type="datetime-local" id="paid_at" name="paid_at" class="input">
            </b-field>
            <b-field label="מידע נוסף">
                <b-input type="text" placeholder="איך שולם(אשראי/מזומן)/איפה שולם(באינטרנט/בדואר)" name="info"></b-input>
            </b-field>
            <b-button type="is-success" outlined native-type="submit">אישור</b-button>
        </form>
    </div>
</div>
@endsection
