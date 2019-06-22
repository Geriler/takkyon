@extends('layouts.app')

@section('title')
    ({{ $question->id }}) {{ $question->question }}
@endsection

@section('content')
    <a class="btn btn-primary" href="{{ route('questions.index') }}">Назад</a>
    <a class="btn btn-primary" href="{{ route('questions.edit', $question->id) }}">Редактировать вопрос</a>
    <div class="question">
        <table class="table table-striped">
            <tr>
                <td>Вопрос</td>
                <td>{{ $question->question }}</td>
            </tr>
            <tr>
                <td>Уровень сложности</td>
                <td>{{ $question->level }}</td>
            </tr>
            <tr>
                <td>Правильный ответ</td>
                <td>{{ $question->answer1 }}</td>
            </tr>
            <tr>
                <td>Пояснение к ответу</td>
                <td>{{ $question->comment1 }}</td>
            </tr>
            <tr>
                <td>Неправильный ответ</td>
                <td>{{ $question->answer2 }}</td>
            </tr>
            <tr>
                <td>Пояснение к ответу</td>
                <td>{{ $question->comment2 }}</td>
            </tr>
            <tr>
                <td>Неправильный ответ</td>
                <td>{{ $question->answer3 }}</td>
            </tr>
            <tr>
                <td>Пояснение к ответу</td>
                <td>{{ $question->comment3 }}</td>
            </tr>
            <tr>
                <td>Неправильный ответ</td>
                <td>{{ $question->answer4 }}</td>
            </tr>
            <tr>
                <td>Пояснение к ответу</td>
                <td>{{ $question->comment4 }}</td>
            </tr>
            <tr>
                <td>Неправильный ответ</td>
                <td>{{ $question->answer5 }}</td>
            </tr>
            <tr>
                <td>Пояснение к ответу</td>
                <td>{{ $question->comment5 }}</td>
            </tr>
        </table>
    </div>
@endsection