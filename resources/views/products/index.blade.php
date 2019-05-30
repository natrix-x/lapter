@extends('layout')

@section('content')
    <div class="products-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>ПРОДУКЦИЯ</h2>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-white">

        <div class="sort-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="flex-start">
                            <div class="sort-by">СОРТИРОВАТЬ ПО:</div>
                            <div class="sort-choose">
                                <span>Дата: новые объявления</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-string">
            <div class="container">
                <div class="row">
                    @foreach($cars as $car)
                        <div class="col-lg-12 col-sm-12">
                            <a href="/products/{{$car->id}}">
                                <div class="product-container">
                                    <div class="flex-start">
                                        <div class="p-product-photo">
                                            <img src="img/products/{{$car->img_name}}.jpg" alt="{{$car->name}}" />
                                        </div>
                                        <div class="p-product-title">
                                            <span>{{$car->name}}</span>
                                        </div>
                                    </div>
                                    <div class="p-product-price">
                                        <span class="p-price">ЦЕНА:</span>
                                        <span class="p-price-value">от {{$car->price_min}} руб</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="products-tile">
            <div class="container">
                <div class="row">
                    @foreach($cars as $car)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <a href="/products/{{$car->id}}">
                                <div class="product-tile">
                                    <div class="product-photo">
                                        <img src="img/products/{{$car->img_name}}.jpg" alt="{{$car->name}}" />
                                    </div>
                                    <div class="product-details">
                                        <div class="product-name">{{$car->name}}</div>
                                        <div class="product-price">от {{$car->price_min}} руб</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pagination">
                        <div class="pag-left-arrow"></div>
                        <div class="pag-pages">
                            <div class="pag-page-btn">1</div>
                            <div class="pag-page-btn pag-active">2</div>
                            <div class="pag-page-btn">3</div>
                        </div>
                        <div class="pag-right-arrow"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="invitation">
                        <div class="i-content">
                            <div class="i-mini-pic">
                                <img src="/img/i-icon.jpg" width="70" alt="" />
                            </div>
                            <div class="i-text">
                            <span><span class="text-blue">LAPTER</span> ПРИГЛАШАЕТ К СОТРУДНИЧЕСТВУ: УСТАНОВОЧНЫЕ
                                ЦЕНТРЫ, МАГАЗИНЫ И КЛУБЫ</span>
                            </div>
                        </div>
                        <div class="i-photo">
                            <img src="/img/i-image.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection