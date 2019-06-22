@extends('layouts.app')

@section('title')
    Все вопросы
@endsection

@section('content')
    <a class="btn btn-primary" href="{{ route('questions.create') }}">Создать вопрос</a>
    @if(count($questions) > 0)
        @foreach($questions as $question)
            <div class="question">
                <div class="question-title"><a href="{{ route('questions.show', $question->id) }}">({{ $question->id }}) {{ $question->question }}</a></div>
            </div>
        @endforeach
    @endif
@endsection