@extends('layout')

@section('content')
    <div class="products-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>НОВОСТИ</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="news-container">
                        @foreach($blog as $news)
                            <div class="news-block">
                                <div class="news-img">
                                    <img src="img/news/news-{{$news->id}}.jpg" alt="{{$news->title}}" />
                                </div>
                                <div class="news-preview">
                                    <div class="news-title">{{$news->title}}</div>
                                    <div class="news-add-info">
                                        <span class="news-date">{{$news->date}}</span>
                                        <span class="news-comments">Комментариев нет</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-2">

                    <form action="" method="post" id="search">
                        <div class="search-input">
                            <input type="text" placeholder="Поиск...">
                            <div class="mini-search-btn"></div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection