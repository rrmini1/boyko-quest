@extends('layouts.app')
@section('title')
    Проекты
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
          <th>#ID</th>
          <th>Пользователь</th>
          <th>Наименование</th>
          <th>Дата регистрации</th>
          <th>Управление</th>
        </thead>

        <tbody>
          @forelse($projects as $project)
              <tr>
                  <td>{{ $project->id }}</td>
                  <td>{{ $project->user_id }}</td>
                  <td>{{ $project->name }}</td>
                  <td>{{ $project->created_at }}</td>
                  <td><a
                          href="{{ route('projects.edit', ['project' => $project->id]) }}"
                          class="btn btn-outline-secondary btn-sm mb-1"
                      >Редактировать</a>
                  <form action="{{ route('projects.destroy', ['project' => $project]) }}" method="post">
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
