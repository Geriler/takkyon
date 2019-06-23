@extends('layouts.app')

@section('title')
    ({{ $question->id }}) {{ $question->question }}
@endsection

@section('content')
    <div class="card-deck" style="margin-left: 0; margin-right: 0;">
        <div>
            <a class="btn btn-primary btn-block" href="{{ route('questions.index') }}">Назад</a>
        </div>
        <div>
            <a class="btn btn-primary btn-block" href="{{ route('questions.edit', $question->id) }}">Редактировать вопрос</a>
        </div>
        <form action="{{ route('questions.destroy', $question->id) }}" method="post">
            {{ method_field('delete') }}
            {{ csrf_field() }}
            <button class="btn btn-primary btn-block" type="submit">Удалить вопрос</button>
        </form>
    </div>
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