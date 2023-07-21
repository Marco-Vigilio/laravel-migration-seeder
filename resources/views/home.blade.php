@extends('layout.app')

@section('title', 'Welcome')

@section('main-content')
    <h1>
        Lista dei treni
    </h1>

    <div>
        <ul>
        @foreach($trainList as $train)
            <li>
                {{$train->stazione_di_partenza}} - {{$train->stazione_di_arrivo}}
            </li>
        @endforeach
        </ul>
    </div>
@endsection