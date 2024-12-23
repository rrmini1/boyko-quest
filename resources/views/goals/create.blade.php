@extends('layouts.main')
@section('title')
    Добавить цель
@endsection

@section('content')
    <div class="m-12">
        <form method="post" action="{{ route('goals.store') }}">
            @csrf
            <input type="hidden" name="project_id" value="{{ request()->query('project_id') }}">

            <div class="form-group">
                <label for="name">{{ __('Наименование') }}</label>
                <input type="text" id="name" class="form-control" name="name" required>
            </div>

            <div class="form-group">
                <label for="term_in_months">{{ __('Срок в месяцах от 1 до 60') }}</label>
                <input type="number" id="term_in_months" class="form-control" name="term_in_months">
            </div>

            <br>
            <button class="btn btn-success" type="submit">Сохранить</button>
        </form>
    </div>
@endsection
