@extends('layouts.app')
@section('content')
    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Ссылка для подтверждения E-mail</h2>

                    <form action="{{route('send-confirmation-email', $user) }}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="email" value="{{ $user->email }}">
                        <input type="submit" class="btn btn-primary" value="Подтвердить">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection