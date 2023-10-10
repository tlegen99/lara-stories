@extends('admin.layouts.app')

@section('content')
    <div class="admin__content">
        <div class="row">
            <div class="admin__title">
                <h1 class="h1">Добавление истории</h1>
            </div>
            
            <form action="{!! route('admin.stories.store') !!}" method="POST" class="col-md-6">
                @csrf
                
                <div class="mb-3">
                    <label for="stories_name" class="form-label">Название</label>
                    <input type="text" name="name" class="form-control" id="stories_name">
                </div>
                <div class="mb-3">
                    <label for="stories_body" class="form-label">Описание</label>
                    <textarea name="body" class="form-control" id="stories_body" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-3">
                    <label for="stories_views" class="form-label">Кол-во просмотров</label>
                    <input type="text" name="views" class="form-control" id="stories_views">
                </div>
                <input type="submit" class="btn btn-success" value="Добавить">
            </form>
        </div>
    </div>
@endsection