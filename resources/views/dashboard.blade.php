@extends('layouts.app')
@section('content')
    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <h1>Поздравляем, {{ auth()->user()->name }}</h1>
                </div>
            </div>
        </div>
    </section>
@endsection