@extends('layouts.app')

@section('title')
  בדיקת תשלומי   {{$type->name}}
@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" integrity="sha256-aa0xaJgmK/X74WM224KMQeNQC2xYKwlAt08oZqjeF0E=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.7.95/css/materialdesignicons.min.css">
@endsection

@section('content')
    <div class="columns is-centered m-1">
        <div class="column is-7">
            <canvas id="myChart" aria-label="טבלת נתונים עבור הוצאות" role="img"></canvas>
            <hr>
            <h6 class="title is-6">דברים לזכור לגבי התגית <b>{{$type->name}}</b> </h6>
            <div class="list" style="max-width: 50%">
                @foreach($type->task as $task)
                   <div class="list-item"> {{$task->content}}</div>
                @endforeach
            </div>
        </div>
        <div class="column is-3 m-1">
            <div class="box">
                <p>
                    סך התשלומים המצטברים עבור {{$type->name}}: <strong>{{$type->activity->sum('amount')}}</strong> ש"ח.
                </p>
            </div>
            <hr>
            <type-activities-list></type-activities-list>
        </div>
    </div>

@endsection


@section('js')
    <script src="{{mix('js/charts.js')}}"></script>
@endsection
