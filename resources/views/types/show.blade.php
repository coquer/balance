@extends('layouts.app')

@section('title')
  בדיקת תשלומי   {{$type->name}}
@endsection

@section('content')
    <div class="columns is-centered m-1">
        <div class="column is-7">
            <div class="box">
                <h6 class="title is-6">בחירת נתוני תשלום עבור שנה אחרת</h6>
                <div class="select">
                    <select id="selectDataYear">
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                    </select>
                </div>
                <button class="button is-info is-outlined" onclick="displayNewDataOnChart()">הצג</button>
            </div>
            <canvas id="myChart" aria-label="טבלת נתונים עבור הוצאות" role="img"></canvas>
            <hr>
            <h6 class="title is-6">דברים לזכור לגבי התגית <b>{{$type->name}}</b> </h6>
            <div class="list" style="max-width: 50%">
                @forelse($type->task as $task)
                   <div class="list-item"> {{$task->content}}</div>
                    @empty
                        <h4 class="title is-4">לא נוספו פתקים בינתיים</h4>
                @endforelse
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

    <script>
        function displayNewDataOnChart() {
            let dropdown = document.getElementById("selectDataYear");
            let value = dropdown.options[dropdown.selectedIndex].value;
            axios.put(`/types/${window.balance.type.id}`, {
                typeId: window.balance.type.id,
                year: value
            }).then(({data}) =>{
                myChart.data.datasets[0].data = data.amounts;
                myChart.update();
            })
        }
    </script>
@endsection
