@extends('layouts.app')
@section('title')
    Цели
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
          <th>#ID</th>
          <th>Проект</th>
          <th>Наименование</th>
          <th>Срок</th>
          <th>Дата регистрации</th>
          <th>Управление</th>
        </thead>

        <tbody>
          @forelse($goals as $goal)
              <tr>
                  <td>{{ $goal->id }}</td>
                  <td>{{ $goal->project_id }}</td>
                  <td>{{ $goal->name }}</td>
                  <td>{{ $goal->term_in_months }}</td>
                  <td>{{ $goal->created_at }}</td>
                  <td><a
                          href="{{ route('goals.edit', ['goal' => $goal->id]) }}"
                          class="btn btn-outline-secondary btn-sm mb-1"
                      >Редактировать</a>
                  <form action="{{ route('goals.destroy', ['goal' => $goal]) }}" method="post">
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
