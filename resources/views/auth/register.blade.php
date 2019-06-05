@extends('layouts.app')

@section('content')
    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-auto"></div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-container">
                        <h4>Регистрация</h4>
                        <form action="{{ route('register') }}" method="post" id="reg">
                            @csrf
                            <div class="input-container">
                                <input type="text" name="name" placeholder="Ваше имя" required>
                            </div>
                            <div class="input-container">
                                <input type="email" name="email" placeholder="E-mail" required>
                            </div>
                            <div class="input-container">
                                <input type="password" name="password" placeholder="Пароль" required>
                            </div>
                            <div class="input-container">
                                <input type="password" name="password_confirmation" placeholder="Повторите пароль" required>
                            </div>
                            <input type="submit" placeholder="Пароль" value="РЕГИСТРАЦИЯ">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-auto"></div>
        </div>
    </section>
@endsection
