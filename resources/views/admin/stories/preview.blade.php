@extends('admin.layouts.app')

<?php
$story = $story ?? null;
?>

@section('content')
    <div class="admin__content">
        <div class="row">
            <div class="admin__title">
                <h1 class="h1">Просмотр истории</h1>
            </div>

            <div>ID - {{ $story->id }}</div>
            <div class="mt-2">Название - {{ $story->name }}</div>
            <div class="mt-2">Описание - {{ $story->body }}</div>
            <div class="mt-2">Кол-во просмотров - {{ $story->views }}</div>
        </div>
    </div>
@endsection
