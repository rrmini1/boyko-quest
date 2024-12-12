@extends('layouts.app')
@section('title')
    Редактировать цель
@endsection

@section('content')
    <div class="m-12">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{ __($error) }}</div>
            @endforeach
        @endif

        <form method="post" action="{{ route('goals.update', ['goal' => $goal]) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="project">{{ __('Проект') }}</label>
                <select class="form-control" id="project" name="project_id">
                    @foreach($projects as $project)
                        <option
                            @if($goal->project_id === $project->id) selected @endif
                            value="{{ $project->id }}">{{ $project->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="name">{{ __('Наименование') }}</label>
                <input
                    type="text"
                    id="name"
                    class="form-control"
                    name="name"
                    value="{{ $goal->name }}"
                    required>
            </div>

            <div class="form-group">
                <label for="term_in_months">{{ __('Срок в месяцах') }}</label>
                <input
                    type="text"
                    id="term_in_months"
                    class="form-control"
                    name="term_in_months"
                    value="{{ $goal->term_in_months }}">
            </div>
            <br>
            <button class="btn btn-success" type="submit">Сохранить</button>
        </form>
    </div>
@endsection
