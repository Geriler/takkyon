@extends('layouts.app')

@section('title')
    Уровень №{{ $id }}
@endsection

@section('content')
    <form method="post" action="{{ route('map.check', $id) }}">
        {{ csrf_field() }}
    @foreach($questions as $question)
			<?php
				$answers = [
					$question->answer1,
					$question->answer2,
					$question->answer3,
                ];
				if (!is_null($question->answer4)) array_push($answers, $question->answer4);
				if (!is_null($question->answer5)) array_push($answers, $question->answer5);
				shuffle($answers);
			?>

        <div class="question">
            <h4 class="question-title">{{ $question->question }}</h4>
            <div>
                <input id="1{{ $question->id }}" type="radio" name="answer{{ $question->id }}" value="{{ $answers[0] }}"> <label for="1{{ $question->id }}">{{ $answers[0] }}</label><br>
                <input id="2{{ $question->id }}" type="radio" name="answer{{ $question->id }}" value="{{ $answers[1] }}"> <label for="2{{ $question->id }}">{{ $answers[1] }}</label><br>
                <input id="3{{ $question->id }}" type="radio" name="answer{{ $question->id }}" value="{{ $answers[2] }}"> <label for="3{{ $question->id }}">{{ $answers[2] }}</label><br>
                @if($question->answer4)
                    <input id="4{{ $question->id }}" type="radio" name="answer{{ $question->id }}" value="{{ $answers[3] }}"> <label for="4{{ $question->id }}">{{ $answers[3] }}</label><br>
                @endif
                @if($question->answer5)
                    <input id="5{{ $question->id }}" type="radio" name="answer{{ $question->id }}" value="{{ $answers[4] }}"> <label for="5{{ $question->id }}">{{ $answers[4] }}</label><br>
                @endif
            </div>
        </div>
        <hr>
    @endforeach
        <button class="btn btn-primary" type="submit">Проверить</button>
    </form>
@endsection