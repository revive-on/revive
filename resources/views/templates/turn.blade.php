@extends('layouts.layout')

@section('content')
    <img src="https://pbs.twimg.com/media/A7tDLzPCQAAZBZP.jpg"/>
    <p>
        turn 테스트
    </p>
    <p>
        <a class="btn btn-primary" href="/turns/{{$id+1}}" role="button">다음 턴</a>
        {{$turn}}

    </p>
@stop
