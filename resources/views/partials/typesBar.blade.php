<div class="tabs is-centered is-small">
    <ul>
        @foreach($types as $type)
            <li><a href="{{route('types.show', $type)}}">{{$type->name}}</a></li>
        @endforeach
    </ul>
</div>


<div class="tabs is-centered is-small">
    <ul>
        <li><a  href="{{route('types.create')}}">@lang('general.new-tag')</a></li>
        <li><a  href="{{route('activities.create')}}">@lang('general.new-activity')</a></li>
        <li><a href="{{route('budget.index')}}">@lang('general.budget')</a></li>
    </ul>
</div>

