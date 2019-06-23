@extends('layouts.app')

@section('title')
    Уровень №{{ $id }}
@endsection

@section('content')
    <form method="post" action="{{ route('map.check', $id) }}">
        {{ csrf_field() }}
    @foreach($questions as $question)
        <div class="question">
            <h3 class="question-title">{{ $question->question }}</h3>
            <div>
                <input id="1{{ $question->id }}" type="radio" name="answer{{ $question->id }}" value="{{ $question->answer1 }}"> <label for="1{{ $question->id }}">{{ $question->answer1 }}</label><br>
                <input id="2{{ $question->id }}" type="radio" name="answer{{ $question->id }}" value="{{ $question->answer2 }}"> <label for="2{{ $question->id }}">{{ $question->answer2 }}</label><br>
                <input id="3{{ $question->id }}" type="radio" name="answer{{ $question->id }}" value="{{ $question->answer3 }}"> <label for="3{{ $question->id }}">{{ $question->answer3 }}</label><br>
                @if($question->answer4)
                    <input id="4{{ $question->id }}" type="radio" name="answer{{ $question->id }}" value="{{ $question->answer4 }}"> <label for="4{{ $question->id }}">{{ $question->answer4 }}</label><br>
                @endif
                @if($question->answer5)
                    <input id="5{{ $question->id }}" type="radio" name="answer{{ $question->id }}" value="{{ $question->answer5 }}"> <label for="5{{ $question->id }}">{{ $question->answer5 }}</label><br>
                @endif
            </div>
        </div>
    @endforeach
        <button class="btn btn-primary" type="submit">Проверить</button>
    </form>
@endsection