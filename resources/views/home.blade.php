<?php
use App\Progress;
$progress = Progress::find(Auth::user()->id);
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Прогресс</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <tr>
                            <td>Первый уровень</td>
                            <td>{{ $progress->progress1 }}/10</td>
                        </tr>
                        <tr>
                            <td>Второй уровень</td>
                            <td>{{ $progress->progress2 }}/10</td>
                        </tr>
                        <tr>
                            <td>Третий уровень</td>
                            <td>{{ $progress->progress3 }}/10</td>
                        </tr>
                        <tr>
                            <td>Четвертый уровень</td>
                            <td>{{ $progress->progress4 }}/10</td>
                        </tr>
                        <tr>
                            <td>Пятый уровень</td>
                            <td>{{ $progress->progress5 }}/10</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">Настройки</div>
                <div class="card-body">
                    <a class="btn btn-primary" href="{{ route('change') }}">Изменить информацию</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
