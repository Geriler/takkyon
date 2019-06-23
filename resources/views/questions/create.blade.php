@extends('layouts.app')

@section('title')
    Создать вопрос
@endsection

@section('content')
    <h3>Создать вопрос</h3>
    @include('common.errors')
    <div class="question-create">
        <form action="{{ route('questions.store') }}" method="post" class="form-vertical">
            {{ csrf_field() }}
            <input type="text" name="question" class="form-control" value="{{ old('question') }}" placeholder="Вопрос">
            <label>Уровень сложности</label>
            <select name="level">
                @for($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            <input type="text" name="answer1" class="form-control" value="{{ old('answer1') }}" placeholder="Правильный вариант ответа">
            <textarea name="comment1" cols="30" rows="10" class="form-control" placeholder="Пояснение к ответу">{{ old('comment1') }}</textarea>
            <input type="text" name="answer2" class="form-control" value="{{ old('answer2') }}" placeholder="Неправильный вариант ответа">
            <textarea name="comment2" cols="30" rows="10" class="form-control" placeholder="Пояснение к ответу">{{ old('comment2') }}</textarea>
            <input type="text" name="answer3" class="form-control" value="{{ old('answer3') }}" placeholder="Неправильный вариант ответа">
            <textarea name="comment3" cols="30" rows="10" class="form-control" placeholder="Пояснение к ответу">{{ old('comment3') }}</textarea>
            <input type="text" name="answer4" class="form-control" value="{{ old('answer4') }}" placeholder="Неправильный вариант ответа">
            <textarea name="comment4" cols="30" rows="10" class="form-control" placeholder="Пояснение к ответу">{{ old('comment4') }}</textarea>
            <input type="text" name="answer5" class="form-control" value="{{ old('answer5') }}" placeholder="Неправильный вариант ответа">
            <textarea name="comment5" cols="30" rows="10" class="form-control" placeholder="Пояснение к ответу">{{ old('comment5') }}</textarea>
            <button class="btn btn-primary">Сохранить</button>
            <a class="btn btn-primary" href="{{ route('questions.index') }}">Назад</a>
        </form>
    </div>
@endsection