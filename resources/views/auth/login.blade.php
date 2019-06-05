@extends('layouts.app')

@section('content')
    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-auto"></div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-container">
                        <h4>Вход</h4>
                        <form action="{{ route('login') }}" method="post" id="login">
                            @csrf
                            <div class="input-container">
                                <input type="email" name="email" placeholder="E-mail" required>
                            </div>
                            <div class="input-container">
                                <input type="password" name="password" placeholder="Пароль" required>
                            </div>
                            <div class="flex-container">
                                <div class="flex-start">
                                    <input type="submit" name="submit" value="ВХОД" />
                                    <div class="checkbox-container">
                                        <input type="checkbox" checked>
                                        <span class="checkbox-text">Запомнить меня</span>
                                    </div>
                                </div>
                                <a href="#" class="forget">Забыли пароль?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-auto"></div>
            </div>
        </div>
    </section>
@endsection
