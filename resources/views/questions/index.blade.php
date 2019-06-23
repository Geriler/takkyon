@extends('layouts.app')

@section('title')
    Все вопросы
@endsection

@section('content')
    <a class="btn btn-primary" href="{{ route('questions.create') }}">Создать вопрос</a>
    @if(count($questions) > 0)
        <table class="table table-striped">
        @foreach($questions as $question)
            <tr>
                <td>
                    <a href="{{ route('questions.show', $question->id) }}">({{ $question->id }}) {{ $question->question }}</a>
                </td>
            </tr>
        @endforeach
        </table>
    @endif
@endsection