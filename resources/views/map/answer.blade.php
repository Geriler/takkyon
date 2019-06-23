@extends('layouts.app')

@section('title')
    Ответ
@endsection

@section('content')
    <div class="card-deck">
    @foreach($results as $result)
        <div class="card">
            <div class="card-header">{{ $result['question'] }}</div>
            <div class="card-body">
                <div class="card-title">Ваш ответ: {{ $result['answer'] }}</div>
                <div class="card-text" style="@if($result['correct_answer']) color: green; @else color: red; @endif">{{ $result['comment'] }}</div>
            </div>
        </div>
    @endforeach
    </div>
    <a class="btn btn-primary" href="/map">Назад</a>
@endsection