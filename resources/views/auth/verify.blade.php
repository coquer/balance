@extends('layouts.app')
@section('title', 'אימות דואר אלקטרוני')

@section('content')
<div class="container">
    <div class="columns is-marginless is-centered">
        <div class="column is-5">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">אימות הדואר האלקטרוני</p>
                </header>

                <div class="card-content">
                    @if (session('resent'))
                        <div class="notification is-success">
                            <button class="delete"></button>
                            נשלח קישור חדש לאיפוס הסיסמה
                        </div>
                    @endif

                    לפני שתמשיכו, אנא בדקו במייל אחר קישור האימות.
                   אם לא קיבלת את המייל, <a href="{{ route('verification.resend') }}">לחצו כאן בכדי לנפק אחד חדש</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
