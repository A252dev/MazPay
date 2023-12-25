@extends('layouts.layout')

@section('title')MazPay - section @endsection

@section('main_content')
    <section class="section__container">
        <div class="section__block">
            <div class="section__header">
                <h5 class="section__title">Discord разделы</h5>
                <div class="section__subtitle">
                    <p class="section__description">На MAZPAY вам не придётся общаться с посредниками или беспокоиться о сохранности
                        своих денег. Вы сможете купить аккаунт Twitch или заказать услугу в среде, где все сделки проводятся непосредственно с продавцами, которые получают оплату только после передачи данных.</p>
                    <a class="section__create" href="#">Создать своё предложение</a>
                </div>
                <div class="section__subtitle down">
                    <a class="section__category" href="#">Дизайн</a>
                    <a class="section__category disabled" href="#">Настройка сервера</a>
                    <a class="section__category disabled" href="#">Аккаунты</a>
                    <a class="section__category disabled" href="#">Подписка</a>
                </div>
            </div>
            <div class="section__content">
                <section class="section__info">
                    <h5 class="section__name description">Описание</h5>
                    <h5 class="section__name seller">Продавец</h5>
                    <h5 class="section__name price">Цена</h5>
                </section>
                <section class=section__products>
                    <!-- PRODUCT -->
                    <a class="section__product" href="#">
                        <p class="product__description description">Сделаю шапку для вашего Discord сервера, оформление</p>
                        <div class="seller__info seller">
                            <img class="seller__image" src="{{ asset('images/seller.svg') }}" alt="sellet">
                            <div class="seller__description">
                                <h5 class="seller__name">Ivan</h5>
                                <p class="seller__raiting"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="9" viewBox="0 0 45 9" fill="none">
                                        <path d="M4.10473 0L5.0263 2.8363H8.00856L5.59586 4.58923L6.51743 7.42552L4.10473 5.6726L1.69203 7.42552L2.6136 4.58923L0.2009 2.8363H3.18316L4.10473 0Z" fill="#FFEC86"/>
                                        <path d="M13.2263 0L14.1479 2.8363H17.1301L14.7174 4.58923L15.639 7.42552L13.2263 5.6726L10.8136 7.42552L11.7352 4.58923L9.32248 2.8363H12.3047L13.2263 0Z" fill="#FFEC86"/>
                                        <path d="M22.5001 0L23.3875 2.8363H26.2593L23.936 4.58923L24.8234 7.42552L22.5001 5.6726L20.1767 7.42552L21.0642 4.58923L18.7408 2.8363H21.6126L22.5001 0Z" fill="#FFEC86"/>
                                        <path d="M31.7737 0L32.6952 2.8363H35.6775L33.2648 4.58923L34.1864 7.42552L31.7737 5.6726L29.361 7.42552L30.2825 4.58923L27.8698 2.8363H30.8521L31.7737 0Z" fill="#FFEC86"/>
                                        <path d="M40.8953 0L41.8168 2.8363H44.7991L42.3864 4.58923L43.308 7.42552L40.8953 5.6726L38.4826 7.42552L39.4041 4.58923L36.9914 2.8363H39.9737L40.8953 0Z" fill="white"/>
                                    </svg><span class="raiting__number">238</span></p>
                                <p class="reg__info">на сайте 1 год</p>
                            </div>
                        </div>
                        <p class="product__price price">100 RUB</p>
                    </a>
                    <a class="section__product" href="#">
                        <p class="product__description description">Сделаю шапку для вашего Discord сервера, оформление</p>
                        <div class="seller__info seller">
                            <img class="seller__image" src="{{ asset('images/seller.svg') }}" alt="seller">
                            <div class="seller__description">
                                <h5 class="seller__name">Ivan</h5>
                                <p class="seller__raiting"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="9" viewBox="0 0 45 9" fill="none">
                                        <path d="M4.10473 0L5.0263 2.8363H8.00856L5.59586 4.58923L6.51743 7.42552L4.10473 5.6726L1.69203 7.42552L2.6136 4.58923L0.2009 2.8363H3.18316L4.10473 0Z" fill="#FFEC86"/>
                                        <path d="M13.2263 0L14.1479 2.8363H17.1301L14.7174 4.58923L15.639 7.42552L13.2263 5.6726L10.8136 7.42552L11.7352 4.58923L9.32248 2.8363H12.3047L13.2263 0Z" fill="#FFEC86"/>
                                        <path d="M22.5001 0L23.3875 2.8363H26.2593L23.936 4.58923L24.8234 7.42552L22.5001 5.6726L20.1767 7.42552L21.0642 4.58923L18.7408 2.8363H21.6126L22.5001 0Z" fill="#FFEC86"/>
                                        <path d="M31.7737 0L32.6952 2.8363H35.6775L33.2648 4.58923L34.1864 7.42552L31.7737 5.6726L29.361 7.42552L30.2825 4.58923L27.8698 2.8363H30.8521L31.7737 0Z" fill="#FFEC86"/>
                                        <path d="M40.8953 0L41.8168 2.8363H44.7991L42.3864 4.58923L43.308 7.42552L40.8953 5.6726L38.4826 7.42552L39.4041 4.58923L36.9914 2.8363H39.9737L40.8953 0Z" fill="white"/>
                                    </svg><span class="raiting__number">238</span></p>
                                <p class="reg__info">на сайте 1 год</p>
                            </div>
                        </div>
                        <p class="product__price price">100 RUB</p>
                    </a>
                    <a class="section__product" href="#">
                        <p class="product__description description">Сделаю шапку для вашего Discord сервера, оформление</p>
                        <div class="seller__info seller">
                            <img class="seller__image" src="{{ asset('images/seller.svg') }}" alt="seller">
                            <div class="seller__description">
                                <h5 class="seller__name">Ivan</h5>
                                <p class="seller__raiting"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="9" viewBox="0 0 45 9" fill="none">
                                        <path d="M4.10473 0L5.0263 2.8363H8.00856L5.59586 4.58923L6.51743 7.42552L4.10473 5.6726L1.69203 7.42552L2.6136 4.58923L0.2009 2.8363H3.18316L4.10473 0Z" fill="#FFEC86"/>
                                        <path d="M13.2263 0L14.1479 2.8363H17.1301L14.7174 4.58923L15.639 7.42552L13.2263 5.6726L10.8136 7.42552L11.7352 4.58923L9.32248 2.8363H12.3047L13.2263 0Z" fill="#FFEC86"/>
                                        <path d="M22.5001 0L23.3875 2.8363H26.2593L23.936 4.58923L24.8234 7.42552L22.5001 5.6726L20.1767 7.42552L21.0642 4.58923L18.7408 2.8363H21.6126L22.5001 0Z" fill="#FFEC86"/>
                                        <path d="M31.7737 0L32.6952 2.8363H35.6775L33.2648 4.58923L34.1864 7.42552L31.7737 5.6726L29.361 7.42552L30.2825 4.58923L27.8698 2.8363H30.8521L31.7737 0Z" fill="#FFEC86"/>
                                        <path d="M40.8953 0L41.8168 2.8363H44.7991L42.3864 4.58923L43.308 7.42552L40.8953 5.6726L38.4826 7.42552L39.4041 4.58923L36.9914 2.8363H39.9737L40.8953 0Z" fill="white"/>
                                    </svg><span class="raiting__number">238</span></p>
                                <p class="reg__info">на сайте 1 год</p>
                            </div>
                        </div>
                        <p class="product__price price">100 RUB</p>
                    </a>
                    <a class="section__product" href="#">
                        <p class="product__description description">Сделаю шапку для вашего Discord сервера, оформление</p>
                        <div class="seller__info seller">
                            <img class="seller__image" src="{{ asset('images/seller.svg') }}" alt="seller">
                            <div class="seller__description">
                                <h5 class="seller__name">Ivan</h5>
                                <p class="seller__raiting"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="9" viewBox="0 0 45 9" fill="none">
                                        <path d="M4.10473 0L5.0263 2.8363H8.00856L5.59586 4.58923L6.51743 7.42552L4.10473 5.6726L1.69203 7.42552L2.6136 4.58923L0.2009 2.8363H3.18316L4.10473 0Z" fill="#FFEC86"/>
                                        <path d="M13.2263 0L14.1479 2.8363H17.1301L14.7174 4.58923L15.639 7.42552L13.2263 5.6726L10.8136 7.42552L11.7352 4.58923L9.32248 2.8363H12.3047L13.2263 0Z" fill="#FFEC86"/>
                                        <path d="M22.5001 0L23.3875 2.8363H26.2593L23.936 4.58923L24.8234 7.42552L22.5001 5.6726L20.1767 7.42552L21.0642 4.58923L18.7408 2.8363H21.6126L22.5001 0Z" fill="#FFEC86"/>
                                        <path d="M31.7737 0L32.6952 2.8363H35.6775L33.2648 4.58923L34.1864 7.42552L31.7737 5.6726L29.361 7.42552L30.2825 4.58923L27.8698 2.8363H30.8521L31.7737 0Z" fill="#FFEC86"/>
                                        <path d="M40.8953 0L41.8168 2.8363H44.7991L42.3864 4.58923L43.308 7.42552L40.8953 5.6726L38.4826 7.42552L39.4041 4.58923L36.9914 2.8363H39.9737L40.8953 0Z" fill="white"/>
                                    </svg><span class="raiting__number">238</span></p>
                                <p class="reg__info">на сайте 1 год</p>
                            </div>
                        </div>
                        <p class="product__price price">100 RUB</p>
                    </a>
                    <a class="section__product" href="#">
                        <p class="product__description description">Сделаю шапку для вашего Discord сервера, оформление</p>
                        <div class="seller__info seller">
                            <img class="seller__image" src="{{ asset('images/seller.svg') }}" alt="seller">
                            <div class="seller__description">
                                <h5 class="seller__name">Ivan</h5>
                                <p class="seller__raiting"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="9" viewBox="0 0 45 9" fill="none">
                                        <path d="M4.10473 0L5.0263 2.8363H8.00856L5.59586 4.58923L6.51743 7.42552L4.10473 5.6726L1.69203 7.42552L2.6136 4.58923L0.2009 2.8363H3.18316L4.10473 0Z" fill="#FFEC86"/>
                                        <path d="M13.2263 0L14.1479 2.8363H17.1301L14.7174 4.58923L15.639 7.42552L13.2263 5.6726L10.8136 7.42552L11.7352 4.58923L9.32248 2.8363H12.3047L13.2263 0Z" fill="#FFEC86"/>
                                        <path d="M22.5001 0L23.3875 2.8363H26.2593L23.936 4.58923L24.8234 7.42552L22.5001 5.6726L20.1767 7.42552L21.0642 4.58923L18.7408 2.8363H21.6126L22.5001 0Z" fill="#FFEC86"/>
                                        <path d="M31.7737 0L32.6952 2.8363H35.6775L33.2648 4.58923L34.1864 7.42552L31.7737 5.6726L29.361 7.42552L30.2825 4.58923L27.8698 2.8363H30.8521L31.7737 0Z" fill="#FFEC86"/>
                                        <path d="M40.8953 0L41.8168 2.8363H44.7991L42.3864 4.58923L43.308 7.42552L40.8953 5.6726L38.4826 7.42552L39.4041 4.58923L36.9914 2.8363H39.9737L40.8953 0Z" fill="white"/>
                                    </svg><span class="raiting__number">238</span></p>
                                <p class="reg__info">на сайте 1 год</p>
                            </div>
                        </div>
                        <p class="product__price price">100 RUB</p>
                    </a>
                    <a class="section__product" href="#">
                        <p class="product__description description">Сделаю шапку для вашего Discord сервера, оформление</p>
                        <div class="seller__info seller">
                            <img class="seller__image" src="{{ asset('images/seller.svg') }}" alt="seller">
                            <div class="seller__description">
                                <h5 class="seller__name">Ivan</h5>
                                <p class="seller__raiting"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="9" viewBox="0 0 45 9" fill="none">
                                        <path d="M4.10473 0L5.0263 2.8363H8.00856L5.59586 4.58923L6.51743 7.42552L4.10473 5.6726L1.69203 7.42552L2.6136 4.58923L0.2009 2.8363H3.18316L4.10473 0Z" fill="#FFEC86"/>
                                        <path d="M13.2263 0L14.1479 2.8363H17.1301L14.7174 4.58923L15.639 7.42552L13.2263 5.6726L10.8136 7.42552L11.7352 4.58923L9.32248 2.8363H12.3047L13.2263 0Z" fill="#FFEC86"/>
                                        <path d="M22.5001 0L23.3875 2.8363H26.2593L23.936 4.58923L24.8234 7.42552L22.5001 5.6726L20.1767 7.42552L21.0642 4.58923L18.7408 2.8363H21.6126L22.5001 0Z" fill="#FFEC86"/>
                                        <path d="M31.7737 0L32.6952 2.8363H35.6775L33.2648 4.58923L34.1864 7.42552L31.7737 5.6726L29.361 7.42552L30.2825 4.58923L27.8698 2.8363H30.8521L31.7737 0Z" fill="#FFEC86"/>
                                        <path d="M40.8953 0L41.8168 2.8363H44.7991L42.3864 4.58923L43.308 7.42552L40.8953 5.6726L38.4826 7.42552L39.4041 4.58923L36.9914 2.8363H39.9737L40.8953 0Z" fill="white"/>
                                    </svg><span class="raiting__number">238</span></p>
                                <p class="reg__info">на сайте 1 год</p>
                            </div>
                        </div>
                        <p class="product__price price">100 RUB</p>
                    </a>
                    <a class="section__product" href="#">
                        <p class="product__description description">Сделаю шапку для вашего Discord сервера, оформление</p>
                        <div class="seller__info seller">
                            <img class="seller__image" src="{{ asset('images/seller.svg') }}" alt="seller">
                            <div class="seller__description">
                                <h5 class="seller__name">Ivan</h5>
                                <p class="seller__raiting"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="9" viewBox="0 0 45 9" fill="none">
                                        <path d="M4.10473 0L5.0263 2.8363H8.00856L5.59586 4.58923L6.51743 7.42552L4.10473 5.6726L1.69203 7.42552L2.6136 4.58923L0.2009 2.8363H3.18316L4.10473 0Z" fill="#FFEC86"/>
                                        <path d="M13.2263 0L14.1479 2.8363H17.1301L14.7174 4.58923L15.639 7.42552L13.2263 5.6726L10.8136 7.42552L11.7352 4.58923L9.32248 2.8363H12.3047L13.2263 0Z" fill="#FFEC86"/>
                                        <path d="M22.5001 0L23.3875 2.8363H26.2593L23.936 4.58923L24.8234 7.42552L22.5001 5.6726L20.1767 7.42552L21.0642 4.58923L18.7408 2.8363H21.6126L22.5001 0Z" fill="#FFEC86"/>
                                        <path d="M31.7737 0L32.6952 2.8363H35.6775L33.2648 4.58923L34.1864 7.42552L31.7737 5.6726L29.361 7.42552L30.2825 4.58923L27.8698 2.8363H30.8521L31.7737 0Z" fill="#FFEC86"/>
                                        <path d="M40.8953 0L41.8168 2.8363H44.7991L42.3864 4.58923L43.308 7.42552L40.8953 5.6726L38.4826 7.42552L39.4041 4.58923L36.9914 2.8363H39.9737L40.8953 0Z" fill="white"/>
                                    </svg><span class="raiting__number">238</span></p>
                                <p class="reg__info">на сайте 1 год</p>
                            </div>
                        </div>
                        <p class="product__price price">100 RUB</p>
                    </a>
                    <a class="section__product" href="#">
                        <p class="product__description description">Сделаю шапку для вашего Discord сервера, оформление</p>
                        <div class="seller__info seller">
                            <img class="seller__image" src="{{ asset('images/seller.svg') }}" alt="seller">
                            <div class="seller__description">
                                <h5 class="seller__name">Ivan</h5>
                                <p class="seller__raiting"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="9" viewBox="0 0 45 9" fill="none">
                                        <path d="M4.10473 0L5.0263 2.8363H8.00856L5.59586 4.58923L6.51743 7.42552L4.10473 5.6726L1.69203 7.42552L2.6136 4.58923L0.2009 2.8363H3.18316L4.10473 0Z" fill="#FFEC86"/>
                                        <path d="M13.2263 0L14.1479 2.8363H17.1301L14.7174 4.58923L15.639 7.42552L13.2263 5.6726L10.8136 7.42552L11.7352 4.58923L9.32248 2.8363H12.3047L13.2263 0Z" fill="#FFEC86"/>
                                        <path d="M22.5001 0L23.3875 2.8363H26.2593L23.936 4.58923L24.8234 7.42552L22.5001 5.6726L20.1767 7.42552L21.0642 4.58923L18.7408 2.8363H21.6126L22.5001 0Z" fill="#FFEC86"/>
                                        <path d="M31.7737 0L32.6952 2.8363H35.6775L33.2648 4.58923L34.1864 7.42552L31.7737 5.6726L29.361 7.42552L30.2825 4.58923L27.8698 2.8363H30.8521L31.7737 0Z" fill="#FFEC86"/>
                                        <path d="M40.8953 0L41.8168 2.8363H44.7991L42.3864 4.58923L43.308 7.42552L40.8953 5.6726L38.4826 7.42552L39.4041 4.58923L36.9914 2.8363H39.9737L40.8953 0Z" fill="white"/>
                                    </svg><span class="raiting__number">238</span></p>
                                <p class="reg__info">на сайте 1 год</p>
                            </div>
                        </div>
                        <p class="product__price price">100 RUB</p>
                    </a><a class="section__product" href="#">
                        <p class="product__description description">Сделаю шапку для вашего Discord сервера, оформление</p>
                        <div class="seller__info seller">
                            <img class="seller__image" src="{{ asset('images/seller.svg') }}" alt="seller">
                            <div class="seller__description">
                                <h5 class="seller__name">Ivan</h5>
                                <p class="seller__raiting"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="9" viewBox="0 0 45 9" fill="none">
                                        <path d="M4.10473 0L5.0263 2.8363H8.00856L5.59586 4.58923L6.51743 7.42552L4.10473 5.6726L1.69203 7.42552L2.6136 4.58923L0.2009 2.8363H3.18316L4.10473 0Z" fill="#FFEC86"/>
                                        <path d="M13.2263 0L14.1479 2.8363H17.1301L14.7174 4.58923L15.639 7.42552L13.2263 5.6726L10.8136 7.42552L11.7352 4.58923L9.32248 2.8363H12.3047L13.2263 0Z" fill="#FFEC86"/>
                                        <path d="M22.5001 0L23.3875 2.8363H26.2593L23.936 4.58923L24.8234 7.42552L22.5001 5.6726L20.1767 7.42552L21.0642 4.58923L18.7408 2.8363H21.6126L22.5001 0Z" fill="#FFEC86"/>
                                        <path d="M31.7737 0L32.6952 2.8363H35.6775L33.2648 4.58923L34.1864 7.42552L31.7737 5.6726L29.361 7.42552L30.2825 4.58923L27.8698 2.8363H30.8521L31.7737 0Z" fill="#FFEC86"/>
                                        <path d="M40.8953 0L41.8168 2.8363H44.7991L42.3864 4.58923L43.308 7.42552L40.8953 5.6726L38.4826 7.42552L39.4041 4.58923L36.9914 2.8363H39.9737L40.8953 0Z" fill="white"/>
                                    </svg><span class="raiting__number">238</span></p>
                                <p class="reg__info">на сайте 1 год</p>
                            </div>
                        </div>
                        <p class="product__price price">100 RUB</p>
                    </a>

                </section>
            </div>
        </div>
    </section>
@endsection
