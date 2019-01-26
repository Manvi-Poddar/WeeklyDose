@extends('layouts.app')

@section('content')
    <h1>Services Page</h1>
    {{$title}}
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection
