@extends('layouts.app')
@section('title')
    Добавить цель
@endsection

@section('content')
    <div class="m-12">
    <form method="post" action="{{ route('goals.store') }}">
        @csrf
        <div class="form-group">
            <label for="project">{{ __('Проект') }}</label>
            <select class="form-control" id="project" name="project_id">
                @foreach($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="name">{{ __('Наименование') }}</label>
            <input type="text" id="name" class="form-control" name="name" required>
        </div>

        <div class="form-group">
            <label for="term_in_months">{{ __('Срок в месяцах') }}</label>
            <input type="text" id="term_in_months" class="form-control" name="term_in_months">
        </div>

        <br>
        <button class="btn btn-success" type="submit">Сохранить</button>
    </form>
    </div>
@endsection
