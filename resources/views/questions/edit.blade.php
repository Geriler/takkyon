@extends('layouts.app')

@section('title')
    Редактирование вопроса #{{ $question->id }}
@endsection

@section('content')
    <h3>Редактирование вопроса #{{ $question->id }}</h3>
    @include('common.errors')
    <div class="question-edit">
        <form action="{{ route('questions.update', $question->id) }}" method="post" class="form-vertical">
            {{ method_field('put') }}
            {{ csrf_field() }}
            <input type="text" name="question" class="form-control" value="{{ $question->question }}" placeholder="Вопрос">
            <select name="level">
                @for($i = 1; $i <= 5; $i++)
                    <option @if($question->level == $i) selected @endif value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <input type="text" name="answer1" class="form-control" value="{{ $question->answer1 }}" placeholder="Правильный вариант ответа">
            <textarea name="comment1" cols="30" rows="10" class="form-control" placeholder="Пояснения к ответу">{{ $question->comment1 }}</textarea>
            <input type="text" name="answer2" class="form-control" value="{{ $question->answer2 }}" placeholder="Не правильный вариант ответа">
            <textarea name="comment2" cols="30" rows="10" class="form-control" placeholder="Пояснения к ответу">{{ $question->comment2 }}</textarea>
            <input type="text" name="answer3" class="form-control" value="{{ $question->answer3 }}" placeholder="Не правильный вариант ответа">
            <textarea name="comment3" cols="30" rows="10" class="form-control" placeholder="Пояснения к ответу">{{ $question->comment3 }}</textarea>
            <input type="text" name="answer4" class="form-control" value="{{ $question->answer4 }}" placeholder="Не правильный вариант ответа">
            <textarea name="comment4" cols="30" rows="10" class="form-control" placeholder="Пояснения к ответу">{{ $question->comment4 }}</textarea>
            <input type="text" name="answer5" class="form-control" value="{{ $question->answer5 }}" placeholder="Не правильный вариант ответа">
            <textarea name="comment5" cols="30" rows="10" class="form-control" placeholder="Пояснения к ответу">{{ $question->comment5 }}</textarea>
            <button class="btn btn-primary">Сохранить</button>
            <a class="btn btn-primary" href="{{ route('questions.show', $question->id) }}">Назад</a>
        </form>
    </div>
@endsection