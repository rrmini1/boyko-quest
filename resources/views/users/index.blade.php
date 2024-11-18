@extends('layouts.app')
@section('title')
    Пользователи
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
          <th>#ID</th>
          <th>Имя</th>
          <th>E-mail</th>
          <th>Дата регистрации</th>
          <th>Управление</th>
        </thead>

        <tbody>
          @forelse($users as $user)
              <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->created_at }}</td>
                  <td><a
                          href="{{ route('users.edit', ['user' => $user->id]) }}"
                          class="btn btn-outline-secondary mb-1"
                      >Редактировать</a>
                  <form action="{{ route('users.destroy', ['user' => $user]) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-outline-danger btn-sm">Удалить</button>
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
