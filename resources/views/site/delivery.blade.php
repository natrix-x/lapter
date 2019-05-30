@extends('layout')

@section('content')
    <div class="products-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>ДОСТАВКА</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumbs">
                        <li><a href="#">LAPTER</a></li>
                        <li><a href="#">О НАС</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Способы доставки</h2>
                    <p class="center">Отправляем по всей России, также возможна отправка заказов в Беларусь, Казахстан и
                        другие страны по предоплате</p>

                    <div class="text-container bg-grey">
                        <h3 class="left">Самовывоз</h3>
                        <p>Если у Вас есть возможность получить Ваш заказ в г.Тольятти, выберите при оформлении заказа
                            «Самовывоз». Вы можете получить Ваш заказ по адресу: Самарская область, г.Тольятти,
                            ул.Спортивная 9, офис 120</p>
                    </div>
                    <div class="text-container bg-grey">
                        <h3 class="left">Транспортные компании</h3>
                        <p>Доставка в регионы России и Казахстан осуществляется транспортными компаниями:</p>
                        <ul>
                            <li>«ПЭК»</li>
                            <li>«КИТ»</li>
                            <li>«Деловые линии»</li>
                            <li>«Ратэк»</li>
                            <li>«ЖелДорЭкспедиция»</li>
                        </ul>
                    </div>
                    <div class="text-container bg-grey">
                        <h3 class="left">«СДЭК» и «EMS почта»</h3>
                        <p>Отправка «СДЭК», «EMS» и прочими компаниями, имеющие представительства в г.Тольятти. Точная
                            стоимость и срок доставки уточняются при оформлении сопроводительных документов в офисе ТК,
                            предварительно можно сделать расчет на сайте каждой из ТК. Доставка груза до терминала ТК в
                            г.Тольятти - бесплатно. Межтерминальную доставку груза оплачивает получатель. Отправка заказа
                            этим способом производится при 100% предоплате стоимости товара, стоимость доставки покупатель
                            оплачивает при получении груза в офисе ТК.</p>
                    </div>
                    <div class="text-container-line"></div>

                    <h3 class="center">Габариты упаковки</h3>

                    <table class="packing">
                        <thead>
                        <tr>
                            <th>Наименование</th>
                            <th>Габариты (ДxШxВ), мм</th>
                            <th>Вес, кг</th>
                        </tr>
                        </thead>

                        <tbody>

{{--                            <tr>--}}
{{--                                @foreach($products as $product)--}}
{{--                                    <td>{{ $product->name }}</td>--}}
{{--                                    <td>{{ $pack->size }}</td>--}}
{{--                                    <td>{{ $product->weight }}</td>--}}
{{--                                @endforeach--}}
{{--                            </tr>--}}
                        @foreach($pack as $item)
                            @foreach($item->products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $item->size }}</td>
                                <td>{{ $product->weight }}</td>
                            </tr>
                            @endforeach
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection