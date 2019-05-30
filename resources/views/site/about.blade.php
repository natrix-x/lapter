@extends('layout')

@section('content')
    <div class="products-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>О НАС</h2>
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
                <div class="col-lg-6 col-sm-12 col-md-12 col-lg-push-6">
                    <h3 class="left">НЕМНОГО О <span class="lapter-green">LAPTER</span></h3>
                    <h4>Силовые расширители колесных арок <img src="img/lapter-text.svg" height="20" alt="" /></h4>
                    <p>Создают стиль с непобедимым характером. Брутальный образ настоящего бойца с бездорожьем - этот дизайн
                        разработан с учетом всех технических и технологических нюансов каждой конкретной модели автомобиля.</p>
                    <p>Максимально эффективная защита кузова, зеркал и стекол Вашего внедорожника от вылетающих из-под колес
                        загрязнений, дорожных реагентов, гравия и атмосферных осадков.</p>
                    <div class="article-attention">
                    <span>Бронебойность расширителей LAPTER позволит защитить Ваш внедорожник от механических воздействий и
                        ударов по кузовным элементам автомобиля, а также, учитывая эффект самовосстановления материала,
                        расширители LAPTER позволят Вам выйти победителем в самой сложной дорожной ситуации.</span>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-12 col-lg-pull-5">
                    <img src="img/about/about-us-1.jpg" width="100%" alt="" />
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <p>Полимерный материал, используемый при производстве силовых расширетелей LAPTER, в отличие от
                        материалов на основе АБС и стеклопластика - не бьется, не трескается и более устойчив к
                        ультрафиолетовому излучению.</p>
                    <p>Полная комплектация и монтаж позволяют водителю самостоятельно сделать апгрейд своего автомобиля.</p>
                    <p>Качественная упаковка, обеспечивающая сохранность товарного вида при транспортировке и выполнении
                        погрузочно-разгрузочных работ.</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="img/about/about-us-2.jpg" width="100%" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gallery-container">
                        <h2 class="text-white">Галерея изображений</h2>
                        <div class="separator">
                            <img src="img/separator.svg" alt="" />
                        </div>
                        <h4>Больше фото в галерее изображений</h4>
                    </div>
                </div>
                <div class="col-12">
                    <div class="tape-images">
                        <div class="tape-img">
                            <img src="img/gallery/gal_01.jpg" alt="" />
                        </div>
                        <div class="tape-img">
                            <img src="img/gallery/gal_02.jpg" alt="" />
                        </div>
                        <div class="tape-img">
                            <img src="img/gallery/gal_03.jpg" alt="" />
                        </div>
                        <div class="tape-img">
                            <img src="img/gallery/gal_04.jpg" alt="" />
                        </div>
                    </div>

                    <div class="tape-scrolling">
                        <div class="left-scroll"></div>
                        <div class="bullets-container">
                            <div class="bullet"></div>
                            <div class="bullet"></div>
                            <div class="bullet bullet-active"></div>
                            <div class="bullet"></div>
                            <div class="bullet"></div>
                        </div>
                        <div class="right-scroll"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection