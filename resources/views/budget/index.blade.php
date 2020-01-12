@extends('layouts.app')

@section('title', 'התקציב שלי')

@section('content')
    <div class="columns m-1">
        <div class="column is-4">
            <h5 class="subtitle is-5">קביעת התקציב עבור חודש <b>{{Carbon\Carbon::now()->monthName}}</b></h5>
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
                <h6> התקציב שקבעתי עבור חודש <strong>{{Carbon\Carbon::now()->monthName}}</strong>:  <strong>{{number_format($currentMonthBudget)}}</strong> ש"ח.</h6>
                <hr>
                סך ההוצאות שלי החודש עד כה: <strong>{{number_format($totalExpensesThisMonth)}}</strong> ש"ח.
                <hr>
                תקציב שנותר לאחר ההוצאות:
                @if($currentMonthBudget - $totalExpensesThisMonth < 0 )
                    <strong style="color: red">{{number_format($currentMonthBudget - $totalExpensesThisMonth)}}</strong>
                @elseif($currentMonthBudget - $totalExpensesThisMonth >= 0)
                    <strong style="color: green">{{number_format($currentMonthBudget - $totalExpensesThisMonth)}}</strong>
                @endif ש"ח.
            </div>
        </div>
        <div class="column is-4">

        </div>
    </div>
@endsection
