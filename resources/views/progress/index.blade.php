@extends('layouts.app')

@section('title')
    Прогресс всех пользователей
@endsection

@section('content')
    @if(count($progress) > 0)
        <table class="table table-striped">
            <tr>
                <td>ID пользователя</td>
                <td>Первый уровень</td>
                <td>Второй уровень</td>
                <td>Третий уровень</td>
                <td>Четвертый уровень</td>
                <td>Пятый уровень</td>
                <td></td>
            </tr>
            @foreach($progresses as $progress)
                <tr>
                    <td>{{ $progress->user_id }}</td>
                    <td>{{ $progress->progress1 }}</td>
                    <td>{{ $progress->progress2 }}</td>
                    <td>{{ $progress->progress3 }}</td>
                    <td>{{ $progress->progress4 }}</td>
                    <td>{{ $progress->progress5 }}</td>
                    <td><a href="{{ route('progress.edit', $progress->id) }}">Редактировать</a></td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection