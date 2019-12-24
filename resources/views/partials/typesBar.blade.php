<div class="tabs is-centered is-boxed">
    <ul>
        @foreach($types as $type)
            <li><a href="{{route('types.show', $type)}}">{{$type->name}}</a></li>
        @endforeach
    </ul>
</div>
