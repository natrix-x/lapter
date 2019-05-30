@extends('layout')

@section('content')
    <div class="contacts-top-bg"></div>
    <section class="bg-grey section-contacts">
        <div class="container bg-white contact-us">
            <h2 class="left">СВЯЗАТЬСЯ С НАМИ</h2>
            <div class="row">
                <form action="" method="post" id="contact-to-us"></form>
                <div class="col-4">
                    <div class="input-container">
                        <div class="name-field">Имя*</div>
                        <input type="text" name="name" placeholder="Введите Ваше имя" />
                    </div>
                    <div class="input-container">
                        <div class="name-field">E-mail*</div>
                        <input type="email" name="email" placeholder="Введите Ваш E-mail" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-container">
                        <div class="name-field">Фамилия*</div>
                        <input type="text" name="name" placeholder="Введите Вашу фамилию" />
                    </div>
                    <div class="input-container">
                        <div class="name-field">Телефон</div>
                        <input type="text" name="phone" placeholder="Введите Ваш телефон" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="input-container">
                        <div class="name-field">Комментарий</div>
                        <textarea name="comment" cols="30" rows="7" placeholder="Напишите Ваше сообщение"></textarea>
                    </div>
                </div>
                <div class="col-8">
                    <div class="input-container">
                        <input type="checkbox" />
                        <span class="checkbox-text">Подпишись и получай последние новости по e-mail</span>
                    </div>
                </div>
                <div class="col-4">
                    <input type="submit" name="submit" value="ОТПРАВИТЬ" />
                </div>
            </div>
        </div>
    </section>
    <section class="bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="contacts-block">
                        <div class="contacts-header">
                            <span>Наши контакты</span>
                        </div>
                        <div class="contacts-body">
                            <div class="contacts-container">
                                <div class="contacts-circle-ico pin"></div>
                                <div class="contacts-subtitle">
                                    <span>Адрес</span>
                                    <p>Самарская обл., г.Тольятти,<br>Приморский б-р, 8</p>
                                </div>
                            </div>
                            <div class="contacts-container">
                                <div class="contacts-circle-ico phone"></div>
                                <div class="contacts-subtitle">
                                    <span>Телефон</span>
                                    <p>Отдел продаж: +7 (903) 333-82-51</p>
                                    <p>Отдел развития: +7 (903) 333-82-52</p>
                                </div>
                            </div>
                            <div class="contacts-container">
                                <div class="contacts-circle-ico email"></div>
                                <div class="contacts-subtitle">
                                    <span>E-mail</span>
                                    <p>lapter163@yandex.ru</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="contacts-block">
                        <div class="contacts-header">
                            <span>Банковские реквизиты</span>
                        </div>
                        <div class="contacts-body">
                            <div class="contacts-container">
                                <div class="contacts-ico requisites"></div>
                                <div class="contacts-subtitle">
                                    <span>Адрес</span>
                                    <p>
                                        <b>ИНН</b> 6321404334<b> КПП</b> 632101001<br>
                                        <b>ОГРН</b> 1166313063245<br>
                                        <b>Юридический адрес:</b> 445036 РФ,<br>Самарская обл., г.Тольятти,<br>ул.Юбилейная д.1, кв.234<br>
                                        <b>Р/С</b> 40702810954400013625<br>
                                        Поволжский Банк<br>ПАО СБЕРБАНК г.Самара<br>
                                        <b>БИК</b> 043601607<br>
                                        <b>К/С</b> 30101810200000000607
                                    </p>
                                    <p>
                                        <b>Почтовый адрес:</b> 445036 РФ,<br>Самарская обл., г.Тольятти,<br>ул.Юбилейная д.1, кв.234<br>
                                    </p>
                                    <p>Генеральный директор<br>Платошин Александр Петрович<br>действует на основании Устава</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="contacts-block">
                        <div class="map">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection