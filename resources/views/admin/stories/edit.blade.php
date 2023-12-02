@extends('admin.layouts.app')

<?php
$story = $story ?? null;
?>

@section('content')
    <div class="admin__content">
        <div class="row">
            <div class="admin__title">
                <h1 class="h1">Редактирование истории</h1>
            </div>

            @if(session('success'))
                <div class="aler alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{!! route('admin.stories.update', ["id" => $story->id]) !!}" method="POST" class="col-md-6">
                @csrf

                <div class="mb-3">
                    <label for="stories_name" class="form-label">Название</label>
                    <input type="text" name="name" class="form-control" id="stories_name" value="{{ $story->name ?? "" }}">
                </div>
                <div class="mb-3">
                    <label for="stories_body" class="form-label">Описание</label>
                    <textarea name="body" class="form-control" id="stories_body" cols="30" rows="10">{{ $story->body ?? "" }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="stories_views" class="form-label">Кол-во просмотров</label>
                    <input type="text" name="views" class="form-control" id="stories_views" value="{{ $story->views ?? "" }}">
                </div>

                <div class="d-flex">
                    <input type="submit" class="btn btn-success me-1" value="Редактировать">
                    <a href="{!! route('admin.stories.index') !!}" class="btn btn-outline-secondary">
                        <span>Назад</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
