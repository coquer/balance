<div class="tabs is-centered is-small">
    <ul>
        @foreach($types as $type)
            <li><a href="{{route('types.show', $type)}}">{{$type->name}}</a></li>
        @endforeach
    </ul>
</div>


<div class="tabs is-centered is-small">
    <ul>
        <li><a  href="{{route('types.create')}}">יצירת תגית חדשה</a></li>
        <li><a  href="{{route('activities.create')}}">יצירת פעילות חדשה</a></li>
        <li><a href="{{route('budget.index')}}">התקציב שלי</a></li>
    </ul>
</div>

