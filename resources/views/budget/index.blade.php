@extends('layouts.app')

@section('title', 'התקציב שלי')
@section('css')
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Varela Round', sans-serif;
        }
    </style>
@endsection
@section('content')
    <div class="columns m-1">
        <div class="column is-4">
            <h5>קביעת התקציב עבור חודש {{\Carbon\Carbon::now()->month}}</h5>
            <hr>
            <form action="{{route('budget.store')}}" method="post">
                @csrf
                <div class="field">
                    <div class="control">
                        <input type="number" class="input" step="0.01" name="budget" placeholder="באיזה תקציב תרצו לעמוד עבור החודש הזה?">
                    </div>
                </div>
                <button class="button is-fullwidth is-success is-outlined">שליחה</button>
            </form>
        </div>
        <div class="column is-4">
            <div class="box">
                <h6> התקציב שקבעתי עבור חודש <strong>{{\Carbon\Carbon::now()->month}}</strong>:  <strong>{{number_format($currentMonthBudget)}}</strong> ש"ח.</h6>
                <hr>
                סך ההוצאות שלי החודש עד כה: <strong>{{number_format($totalExpensesThisMonth)}}</strong> ש"ח.
                <hr>
                תקציב לאחר הוצאות: <strong>{{number_format($currentMonthBudget - $totalExpensesThisMonth)}}</strong> ש"ח.
            </div>
        </div>
        <div class="column is-4">

        </div>
    </div>
@endsection
