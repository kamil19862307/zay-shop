@extends('layout.layout')

@section('title')
    {{__('Войти в аккаунт')}}
@endsection

@section('content')

    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Вход в аккаунт</h1>
        </div>
    </div>



    <!-- Start Contact -->
    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-8 m-auto" method="POST" role="form" action="{{ route('admin.login_process') }}">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger row m-auto text-center">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row m-auto  text-center">
                    <div class="form-group col-md-8 m-auto mb-3 ">
                        <input
                            type="email"
                            class="form-control mt-1"
                            id="email" name="email"
                            placeholder="E-mail"
                            value="{{ old('email') }}"
                            style="line-height: 2.5;"
                        >
                    </div>
                    <div class="form-group col-md-8 m-auto mb-3">
                        <input
                            type="password"
                            class="form-control mt-1"
                            id="password" name="password"
                            placeholder="Пароль"
                            style="line-height: 2.5;"
                        >
                    </div>

                    <div class="form-group col-md-8 m-auto mb-5">
                        <button type="submit" class="btn btn-success col-md-8 btn-lg px-3">Войти</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->

@endsection
