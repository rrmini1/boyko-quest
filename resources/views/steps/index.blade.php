@extends('layouts.app')
@section('title')
    Шаги
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
          <th>#ID</th>
          <th>Цель</th>
          <th>Наименование</th>
          <th>Начало</th>
          <th>Конец</th>
          <th>Управление</th>
        </thead>

        <tbody>
          @forelse($steps as $step)
              <tr>
                  <td>{{ $step->id }}</td>
                  <td>{{ $step->goal_id }}</td>
                  <td>{{ $step->name }}</td>
                  <td>{{ $step->started_at }}</td>
                  <td>{{ $step->finished_at }}</td>
                  <td><a
                          href="{{ route('steps.edit', ['step' => $step->id]) }}"
                          class="btn btn-outline-secondary btn-sm mb-1"
                      >Редактировать</a>
                  <form action="{{ route('steps.destroy', ['step' => $step]) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <a type="submit" class="btn btn-outline-danger btn-sm">Удалить</a>
                  </form>
{{--                      &nbsp; <a href="{{ route('users.destroy', ['user' => $user]) }}">Удаление</a></td>--}}
              </tr>
          @empty
              <tr>
                  <td colspan="5"><h3>Записей не найдено</h3></td>
              </tr>
          @endforelse
        </tbody>
    </table>
@endsection
