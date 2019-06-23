<?php

use App\Progress;
use Illuminate\Support\Facades\Auth;

$user_id = Auth::user()->id;
$progress = Progress::all()->where('user_id', $user_id)[$user_id - 1];
?>
@extends('layouts.app')

@section('title')
    Карта уровней
@endsection

@section('content')
    <table>
        <tr><td><a class="btn btn-primary btn-block @if(App\Questions::all()->where('level', 1)->isEmpty()) disabled @endif" href="{{ route('map.index', 1) }}">Первый уровень</a></td></tr>
        <tr><td><a class="btn btn-primary btn-block @if($progress->progress1 < 7 || App\Questions::all()->where('level', 2)->isEmpty()) disabled @endif" href="{{ route('map.index', 2) }}">Второй уровень</a></td></tr>
        <tr><td><a class="btn btn-primary btn-block @if($progress->progress2 < 7 || App\Questions::all()->where('level', 3)->isEmpty()) disabled @endif" href="{{ route('map.index', 3) }}">Третий уровень</a></td></tr>
        <tr><td><a class="btn btn-primary btn-block @if($progress->progress3 < 7 || App\Questions::all()->where('level', 4)->isEmpty()) disabled @endif" href="{{ route('map.index', 4) }}">Четвертый уровень</a></td></tr>
        <tr><td><a class="btn btn-primary btn-block @if($progress->progress4 < 7 || App\Questions::all()->where('level', 5)->isEmpty()) disabled @endif" href="{{ route('map.index', 5) }}">Пятый уровень</a></td></tr>
    </table>
@endsection