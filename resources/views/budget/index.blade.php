@extends('layouts.app')

@section('title', 'התקציב שלי')

@section('content')
    <div class="columns m-1">
        <div class="column is-4">
            <h5 class="subtitle is-5">קביעת התקציב עבור חודש <b>{{$month}}</b></h5>
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
                <h6> התקציב שקבעתי עבור חודש <strong>{{$month}}</strong>:  <strong>{{number_format($currentMonthBudget)}}</strong> ש"ח.</h6>
                <hr>
                סך ההוצאות החודש עד היום: <strong>{{number_format($totalExpensesThisMonth)}}</strong> ש"ח.
                <hr>
                תקציב לאחר ההוצאות:
                @if($budgetStatus < 0 )
                    <strong style="color: red">{{number_format($budgetStatus)}}</strong>
                @elseif($budgetStatus >= 0)
                    <strong style="color: green">{{number_format($budgetStatus)}}</strong>
                @endif ש"ח.
            </div>
        </div>
    </div>
@endsection
