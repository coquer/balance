@extends('layouts.app')
@section('title', 'Balance')
@section('content')
        <div class="columns is-centered m-1">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <a class="button is-fullwidth" href="{{route('types.create')}}">צור תגית חדשה</a>
                        <a class="button is-fullwidth" href="{{route('activities.create')}}">צור פעילות חדשה</a>
                        <div class="dropdown is-hoverable">
                            <div class="dropdown-trigger">
                                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu4">
                                    <span>בדיקת פעילות</span>
                                    <span class="icon is-small">
                                      <i class="fas fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                                <div class="dropdown-content">
                                    @foreach($types as $type)
                                        <div class="dropdown-item">
                                            <a href="{{route('types.show', $type)}}">{{$type->name}}</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </header>
                </nav>
            </div>
        </div>
@endsection
