@extends('layout')

@section('content')
    <section class="promo">
        <img src="img/promo.jpg" alt="" />
    </section>

    <div class="title-site">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>РАСШИРИТЕЛИ АРОК <span class="lapter-green">LAPTER</span></h1>
                    <div class="section-title">
                        <span>РАСШИРИТЕЛИ АРОК</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PRODUCTS -->
    <section class="bg-white">
        <div class="container">
            <div class="row">
                @foreach($cars as $car)
{{--                    @foreach($car->products as $product)--}}
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <a href="/products/{{$car->id}}">
                                <div class="product-tile">
                                    <div class="product-photo">
                                        <img src="img/products/{{$car->img_name}}.jpg" alt="{{$car->name}}" />
                                    </div>
                                    <div class="product-details">
                                        <div class="product-name">{{$car->name}}</div>
                                        <div class="product-price">{{$car->price_min}} руб</div>
                                    </div>
                                </div>
                            </a>
                        </div>
{{--                    @endforeach--}}
                @endforeach
            </div>
            <a href="/products"><button class="button">СМОТРЕТЬ ВСЕ</button></a>
        </div>
    </section>

    <!-- WHY IS LAPTER -->
    <section class="bg-grey">
        <div class="container">
            <h2>ПОЧЕМУ ВЫБИРАЮТ LAPTER</h2>
            <div class="separator">
                <img src="img/separator.svg" alt="Separator" />
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="reason-container">
                        <div class="reason-pic">
                            <img src="img/gear.svg" alt="Gear" />
                        </div>
                        <div class="reason-text">
                            <h3>Создание стиля внедорожника</h3>
                            <p>Брутальный образ настоящего бойца с бездорожьем. Это дизайн разработан с учетом всех
                                технических и технологических нюансов каждой конкретной модели автомобиля</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="reason-container">
                        <div class="reason-pic">
                            <img src="img/ok.svg" alt="Ok" />
                        </div>
                        <div class="reason-text">
                            <h3>Эффективная защита</h3>
                            <p>Максимально эффективная защита кузова, зеркал и стекол Вашего внедорожника от вылетающих
                                из-под колес загрязнений, дорожных реагентов, гравия и атмосферных рсадков</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="reason-container">
                        <div class="reason-pic">
                            <img src="img/thumb-up.svg" alt="Thumb-Up" />
                        </div>
                        <div class="reason-text">
                            <h3>Бронебойность расширителей</h3>
                            <p>Защитит внедорожник от механических воздействий и ударов по кузовным элементам автомобиля, а
                                также, учитывая эффект самовосстановления материала, расширители LAPTER позволят Вам выйти
                                победителем в самой сложной дорожной и внедорожной ситуации</p>
                        </div>
                    </div>


                </div>
            </div>
            <button class="button">
                <img src="img/suitcase.svg" alt="Suitcase" />
                ЧИТАТЬ ДАЛЕЕ
            </button>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <h2 class="left">КАК ЭТО СДЕЛАНО |<img src="img/lapter-text.svg" alt="Lapter" /></h2>

                    <p>В производстве силовых расширителей LAPTER используется только самое современное оборудование и
                        высококвалифицированный персонал. Постоянно производится разработка новых моделей расширителей для
                        различных марок автомобилей! Наша цель - охватить весь рынок популярных моделей внедорожников
                        любителей бездорожья!
                    </p>
                    <p>В качестве материала для производства расширителей применяется "Эластон" - материал на основе
                        <strong>LLDPE</strong> с добавлением эластичных свойств, внутренняя разработка компании LAPTER.</p>
                    <p><strong>*LLDPE</strong> - полиэтилен высокой плотности низкого давления по ГОСТ</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="video-block">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="adverts-content">
                        <h2 class="left">ПРИГЛАШАЕМ К СОТРУДНИЧЕСТВУ С <span class="lapter-white">LAPTER</span></h2>
                        <p>Приглашаем к сотрудничеству: установочные центры, магазины и клубы</p>
                    </div>
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </section>

@endsection