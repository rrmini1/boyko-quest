@extends('layouts.app')
@section('content')
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="text-center"  @if (session('status')) style="display: none" @endif>
                                    <h1 class="h4 text-gray-900 mb-2">{{ __('Забыл пароль ?') }}</h1>
                                    <p class="mb-4">{{ __('Ну что же ты ...') }}</p>
                                </div>
                                <form class="user"  method="post" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email"
                                               class="form-control form-control-user"
                                               id="email"
                                               name="email"
                                               aria-describedby="emailHelp"
                                               placeholder="{{__('Введите Email адрес...')}}">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Reset Password
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">{{ __('Создать аккаунт') }}</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ route('login') }}">{{ __('Уже есть аккаунт? Войти') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
