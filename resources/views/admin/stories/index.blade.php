@extends('admin.layouts.app')

@section('content')
    <div class="admin__content">
        <div class="row">
            <div class="admin__title">
                <h1 class="h1">Список историй</h1>
            </div>

            @if(session('success'))
                <div class="aler alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <td colspan="9" class="admin__toolbar">
                            <a href="{!! route('admin.stories.create') !!}" class="btn btn-success">Добавить</a>
                        </td>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($stories as $story)
                        <tr>
                            <td>{{ $story->id }}</td>
                            <td>{{ $story->name }}</td>
                            <td>{{ $story->body }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-arrow-up-right-square"></i>
                                    </a>
                                    <a href="" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
