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
            @foreach($progress as $prog)
                <tr>
                    <td>{{ $prog->user_id }}</td>
                    <td>{{ $prog->progress1 }}</td>
                    <td>{{ $prog->progress2 }}</td>
                    <td>{{ $prog->progress3 }}</td>
                    <td>{{ $prog->progress4 }}</td>
                    <td>{{ $prog->progress5 }}</td>
                    <td><a href="{{ route('progress.edit', $prog->id) }}">Редактировать</a></td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection