<div class="tabs is-centered is-boxed">
    <ul>
        @foreach($types as $type)
            <li><a href="{{route('types.show', $type)}}">{{$type->name}}</a></li>
        @endforeach
    </ul>
</div>


<div class="columns is-centered m-1">
    <div class="column is-5" style="display: flex; flex-wrap: revert">
                <a class="button  is-dark is-outlined" href="{{route('types.create')}}">יצירת תגית חדשה</a>
                <a class="button  is-dark is-outlined" href="{{route('activities.create')}}">יצירת פעילות חדשה</a>
                <a class="button  is-dark is-outlined" href="{{route('budget.index')}}">התקציב שלי</a>
    </div>
</div>
