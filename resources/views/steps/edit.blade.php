@extends('layouts.app')
@section('title')
    Редактировать шаг
@endsection

@section('content')
    <div class="m-12">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{ __($error) }}</div>
            @endforeach
        @endif

        <form method="post" action="{{ route('steps.update', ['step' => $step]) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="goal">{{ __('Цель') }}</label>
                <select class="form-control" id="goal" name="goal_id">
                    @foreach($goals as $goal)
                        <option
                            @if($step->goal_id === $goal->id) selected @endif
                            value="{{ $goal->id }}">{{ $goal->name }}</option>
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
                    value="{{ $step->name }}"
                    required>
            </div>

            <div class="form-group">
                <label for="started_at">{{ __('Начало') }}</label>
                <input
                    data-date-format="dd/mm/yyyy"
                    id="started_at"
                    class="form-control"
                    name="started_at"
                    value="{{ $step->started_at }}">
            </div>

            <div class="form-group">
                <label for="finished_at">{{ __('Окончание') }}</label>
                <input
                    data-date-format="dd/mm/yyyy"
                    id="finished_at"
                    class="form-control"
                    name="finished_at"
                    value="{{ $step->finished_at }}">>
            </div>
            <br>
            <button class="btn btn-success" type="submit">Сохранить</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
        $('#started_at').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
        $("#started_at").datepicker("setDate", new Date());

        $('#finished_at').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
        $("#finished_at").datepicker("setDate", new Date());
    </script>
@endsection
