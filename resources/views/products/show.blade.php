@extends('layout')

@section('content')
    <section class="bg-white product-cart-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12">
                    <h2 class="left">{{$car->name}}</h2>

                    <!-- SLIDER start -->
                    <div id="slider1_container" style="position: relative; width: 825px;height: 550px; overflow: hidden;">

                        <!-- Loading Screen -->
                        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="/img/svg/spin.svg" />
                        </div>

                        <!-- Slides Container -->
                        <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 825px; height: 550px;
            overflow: hidden;">
                            <div>
                                <img data-u="image" src="/img/products/{{$car->img_name}}/prod1.jpg" />
                                <img data-u="thumb" src="/img/products/{{$car->img_name}}/prod1.jpg" />
                            </div>
                            <div>
                                <img data-u="image" src="/img/products/{{$car->img_name}}/prod2.jpg" />
                                <img data-u="thumb" src="/img/products/{{$car->img_name}}/prod2.jpg" />
                            </div>
                            <div>
                                <img data-u="image" src="/img/products/{{$car->img_name}}/prod3.jpg" />
                                <img data-u="thumb" src="/img/products/{{$car->img_name}}/prod3.jpg" />
                            </div>
                            <div>
                                <img data-u="image" src="/img/products/{{$car->img_name}}/prod4.jpg" />
                                <img data-u="thumb" src="/img/products/{{$car->img_name}}/prod4.jpg" />
                            </div>
                            <div>
                                <img data-u="image" src="/img/products/{{$car->img_name}}/prod5.jpg" />
                                <img data-u="thumb" src="/img/products/{{$car->img_name}}/prod5.jpg" />
                            </div>
                            <div>
                                <img data-u="image" src="/img/products/{{$car->img_name}}/prod6.jpg" />
                                <img data-u="thumb" src="/img/products/{{$car->img_name}}/prod6.jpg" />
                            </div>
                        </div>
                        <!--#region Thumbnail Navigator Skin Begin -->


                        <!-- thumbnail navigator container -->
                        <div data-u="thumbnavigator" class="jssort07" style="width: 825px; height: 100px; left: 0px; bottom: 0px;">
                            <!-- Thumbnail Item Skin Begin -->
                            <div data-u="slides" style="cursor: default;">
                                <div data-u="prototype" class="p">
                                    <div data-u="thumbnailtemplate" class="i"></div>
                                    <div class="o"></div>
                                </div>
                            </div>
                            <!-- Thumbnail Item Skin End -->

                            <style>
                                .jssora051 {display:block;position:absolute;cursor:pointer;}
                                .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
                                .jssora051:hover {opacity:.8;}
                                .jssora051.jssora051dn {opacity:.5;}
                                .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
                            </style>
                            <div data-u="arrowleft" class="jssora051" style="width:40px;height:40px;top:123px;left:8px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                                </svg>
                            </div>
                            <div data-u="arrowright" class="jssora051" style="width:40px;height:40px;top:123px;right:8px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                                </svg>
                            </div>
                            <!--#endregion Arrow Navigator Skin End -->
                        </div>
                        <!--#endregion Thumbnail Navigator Skin End -->

                        <!-- Trigger -->
                        <script>
                            jssor_slider1_init();
                        </script>

                    </div>
                    <!-- SLIDER end -->

                    <ul class="products-nav">
                        <li class="pn-item-active"><a href="">КОМПЛЕКТАЦИИ</a></li>
                        <li><a href="">ОБЗОР</a></li>
                        <li><a href="">КОНТАКТЫ</a></li>
                        <li><a href="">РАСПОЛОЖЕНИЕ</a></li>
                    </ul>

                    <div class="pn-item-content">
                        <div class="products-flex">
                            <div class="flex-inner">
                                <span class="roboto-slab">Назначение</span>
                                <ul class="style-check">
                                    <li>Защита от внешних воздействий грязи, гравия и т.д.</li>
                                    <li>Эффект усиления кузовных элементов</li>
                                    <li>Допускают установку колес большего диаметра и расширение колеи</li>
                                    <li>Улучшене внешнего вида внедорожника</li>
                                </ul>
                            </div>
                            <div class="flex-inner">
                                <span class="roboto-slab">Свойства</span>
                                <ul class="style-check">
                                    <li>Эффект самовосстановления при умеренных внешних механических воздействиях</li>
                                    <li>Точность повторения линий геометрии кузова автомобиля</li>
                                </ul>
                            </div>
                        </div>

                        <div class="complete-set">
                            <div class="complete-set-title">
                                <span>КОМПЛЕКТАЦИИ</span>
                            </div>
                            <div class="products-flex">
                                @foreach($car->products as $product)
                                <div class="flex-inner">
                                    <span class="roboto-slab">{{$product->name}}</span>
                                    <ul class="style-check-ellipse">
                                        <li>Защита от внешних воздействий грязи, гравия и т.д.</li>
                                        <li>Эффект усиления кузовных элементов</li>
                                        <li>Допускают установку колес большего диаметра и расширение колеи</li>
                                        <li>Улучшение внешнего вида внедорожника</li>
                                    </ul>
                                    <div class="pre-order-container">
                                        <span class="pre-order-title">Сделать предзаказ</span>
                                        <div class="pre-order-block flex-center">
                                            <span class="pre-order-price">{{$product->price}} руб.</span>
                                            <button class="button">В КОРЗИНУ</button>
                                        </div>
                                    </div>
                                    <div class="just-pre-order">
                                        <span>Данный товар доступен только по предзаказу</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="line-separator"></div>
                            <div class="note-container">
                                <span class="roboto-slab">Примечания</span>
                                <div class="note">
                                    <p>*LLDPE Полиэтилен высокой плотности низкого давления по ГОСТ</p>
                                    <p>«Эластон» - материал на основе LLDPE с добавлением эластичных свойств, внутренняя
                                        разработка компании. Размерность колес указана приблизительно, без учета лифта кузова
                                        или подвески и может варьироваться, в зависимости от применяемого лифта, «вылета» ET
                                        дисков колес и т.д.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SIDEBAR -->
                <div class="col-lg-3 col-sm-12">
                    <div class="product-sidebar">
                        <div class="sidebar-price-container">
                            <span class="sp-price">ЦЕНА:</span>
                            <span class="sp-value">от {{ $car->price_min }} руб</span>
                        </div>
                        <div class="sidebar-product-category">
                            <span>Модели & Комплектации</span>
                        </div>
                        <div class="sidebar-product-mods-container">
                            <ul class="accordion">
                                @foreach($car->products as $product)
                                <li class="sidebar-product-mod">
                                    <div class="spm-title accordion-control">
                                        <div class="spm-title-name">
                                            <span>{{$product->name}}</span>
                                        </div>
                                        <div class="expand-info mod-opened"></div>
                                    </div>
                                    <div class="accordion-panel">
                                        <ul class="style-check-ellipse">
                                            <li>На кузов {{$product->applied_for}}</li>
                                            <li>Выступание за габариты кузова:<br>
                                                - передняя арка ~ {{$product->width_front}} мм<br>
                                                - задняя арка ~ {{$product->width_rear}} мм</li>
                                            <li>Материал LLDPE* (Эластон**)</li>
                                        </ul>
                                        <div class="pre-order-container">
                                            <span class="pre-order-title">Сделать предзаказ</span>
                                            <div class="pre-order-block">
                                                <span class="sidebar-pre-order-price">{{ $product->price }} руб.</span>
                                                <button class="sidebar-button">В КОРЗИНУ</button>
                                            </div>
                                        </div>
                                        <div class="just-pre-order">
                                            <span>Данный товар доступен только по предзаказу</span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-callback">
                        <div class="callback-ico"></div>
                        <span>ОБРАТНЫЙ ЗВОНОК</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection