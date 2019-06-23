@extends('layouts.app')

@section('title')
    Редактирование прогресса #{{ $progress->id }}
@endsection

@section('content')
    <h3>Редактирование прогресса #{{ $progress->id }}</h3>
    @include('common.errors')
    <div class="progress-edit">
        <form action="{{ route('progress.update', $progress->id) }}" method="post" class="form-vertical">
            {{ method_field('put') }}
            {{ csrf_field() }}
            <input type="number" min="0" max="10" name="progress1" class="form-control" value="{{ $progress->progress1 }}" placeholder="Прогресс">
            <input type="number" min="0" max="10" name="progress2" class="form-control" value="{{ $progress->progress2 }}" placeholder="Прогресс">
            <input type="number" min="0" max="10" name="progress3" class="form-control" value="{{ $progress->progress3 }}" placeholder="Прогресс">
            <input type="number" min="0" max="10" name="progress4" class="form-control" value="{{ $progress->progress4 }}" placeholder="Прогресс">
            <input type="number" min="0" max="10" name="progress5" class="form-control" value="{{ $progress->progress5 }}" placeholder="Прогресс">
            <button class="btn btn-primary">Сохранить</button>
            <a class="btn btn-primary" href="{{ route('progress.index', $progress->id) }}">Назад</a>
        </form>
    </div>
@endsection