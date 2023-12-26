@extends('layouts.layout')

@section('title')MazPay - profile @endsection

@section('main_content')
{{--    <h1>Profile</h1>--}}
{{--    <p>Email: {{ $user->email }}</p>--}}
{{--    <p>Nickname: {{ $user->nickname }}</p>--}}
{{--    <p>Password: {{ $user->password }}</p>--}}
{{--    <p>Avatar: {{ $user->avatar }}</p>--}}
{{--    <p>Reg-date: {{ $user->registration_date }}</p>--}}

    <section class="account__container">
        <div class="account__block">
            <div class="account__info left">
                <img class="avatar" src="{{ asset($user->avatar) }}" alt="avatar">
                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="18" viewBox="0 0 94 18" fill="none">
                    <path d="M8.61883 0.920807L10.5361 6.82153H16.7405L11.721 10.4684L13.6383 16.3691L8.61883 12.7222L3.59937 16.3691L5.51663 10.4684L0.497182 6.82153H6.70157L8.61883 0.920807Z" fill="#FFEC86"/>
                    <path d="M27.5958 0.920807L29.513 6.82153H35.7174L30.6979 10.4684L32.6152 16.3691L27.5958 12.7222L22.5763 16.3691L24.4936 10.4684L19.4741 6.82153H25.6785L27.5958 0.920807Z" fill="#FFEC86"/>
                    <path d="M46.889 0.920807L48.7352 6.82153H54.7098L49.8763 10.4684L51.7225 16.3691L46.889 12.7222L42.0554 16.3691L43.9017 10.4684L39.0681 6.82153H45.0427L46.889 0.920807Z" fill="#FFEC86"/>
                    <path d="M66.1821 0.920807L68.0993 6.82153H74.3037L69.2843 10.4684L71.2015 16.3691L66.1821 12.7222L61.1626 16.3691L63.0799 10.4684L58.0604 6.82153H64.2648L66.1821 0.920807Z" fill="#FFEC86"/>
                    <path d="M85.159 0.920807L87.0763 6.82153H93.2806L88.2612 10.4684L90.1784 16.3691L85.159 12.7222L80.1395 16.3691L82.0568 10.4684L77.0373 6.82153H83.2417L85.159 0.920807Z" fill="white"/>
                </svg>
                <a class="account__link" href="{{ url("/settings") }}">Настроить профиль</a>
            </div>
            <div class="account__info right">
                <div class="up">
                    <h5 class="title">{{ $user->nickname }} <span class="online__status">Online</span></h5>
                    <a class="account__link bold" href="#">Всего 238 отзывов (wb)</a>
                </div>
                <a class="write__message__button" href="#">Написать</a>
                <div class="down">
                    <h5 class="reg__info__title">Дата создания аккаунта</h5>
                    <p class="reg__info">{{ $user->registration_date }}</p>
                </div>

            </div>
        </div>
        <div class="account__block column">
            <h5 class="ach__title">Достижения</h5>
            @if (!empty($success))
                <p>{{ $success }}</p>
            @endif
            <div class="ach__container">
                <div class="ach__block">
                    <div class="image"></div>
                    <h5 class="ach__subtitle">5 продаж за неделю</h5>
                </div>
                <div class="ach__block">
                    <div class="image"></div>
                    <h5 class="ach__subtitle">Набрать 10 отзывов</h5>
                </div>
                <div class="ach__block">
                    <div class="image"></div>
                    <h5 class="ach__subtitle">Создать 10 лотов</h5>
                </div>
                <div class="ach__block">
                    <div class="image"></div>
                    <h5 class="ach__subtitle">Совершить 1 покупку</h5>
                </div>
                <div class="ach__block">
                    <div class="image"></div>
                    <h5 class="ach__subtitle">Оставить 1 отзыв</h5>
                </div>
                <div class="ach__block">
                    <div class="image"></div>
                    <h5 class="ach__subtitle">Набрать 50 отзывов</h5>
                </div>
                <div class="ach__block">
                    <div class="image"></div>
                    <h5 class="ach__subtitle">10 продаж за неделю</h5>
                </div>
                <div class="ach__block">
                    <div class="image"></div>
                    <h5 class="ach__subtitle">Верифицироваться</h5>
                </div>
            </div>
        </div>
    </section>
<section class="list__container">
    <h5 class="title">Предложения</h5>
    <div class="products__container">
        <div class="product__block">
            <h5 class="title">Дизайн Discord<span class="edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M13.8067 4.69334C14.0667 4.43334 14.0667 4 13.8067 3.75334L12.2467 2.19334C12 1.93334 11.5667 1.93334 11.3067 2.19334L10.08 3.41334L12.58 5.91334M2 11.5V14H4.5L11.8733 6.62L9.37333 4.12L2 11.5Z" fill="white"/>
</svg></span></h5>
            <div class="product__title">
                <h5 class="block__title">Описание</h5>
                <span class="block__subtitle">Цена</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
        </div>
        <div class="product__block">
            <h5 class="title">Дизайн Discord<span class="edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M13.8067 4.69334C14.0667 4.43334 14.0667 4 13.8067 3.75334L12.2467 2.19334C12 1.93334 11.5667 1.93334 11.3067 2.19334L10.08 3.41334L12.58 5.91334M2 11.5V14H4.5L11.8733 6.62L9.37333 4.12L2 11.5Z" fill="white"/>
</svg></span></h5>
            <div class="product__title">
                <h5 class="block__title">Описание</h5>
                <span class="block__subtitle">Цена</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
        </div>
        <div class="product__block">
            <h5 class="title">Дизайн Discord<span class="edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M13.8067 4.69334C14.0667 4.43334 14.0667 4 13.8067 3.75334L12.2467 2.19334C12 1.93334 11.5667 1.93334 11.3067 2.19334L10.08 3.41334L12.58 5.91334M2 11.5V14H4.5L11.8733 6.62L9.37333 4.12L2 11.5Z" fill="white"/>
</svg></span></h5>
            <div class="product__title">
                <h5 class="block__title">Описание</h5>
                <span class="block__subtitle">Цена</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
        </div>
        <div class="product__block">
            <h5 class="title">Дизайн Discord<span class="edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
<path d="M13.8067 4.69334C14.0667 4.43334 14.0667 4 13.8067 3.75334L12.2467 2.19334C12 1.93334 11.5667 1.93334 11.3067 2.19334L10.08 3.41334L12.58 5.91334M2 11.5V14H4.5L11.8733 6.62L9.37333 4.12L2 11.5Z" fill="white"/>
</svg></span></h5>
            <div class="product__title">
                <h5 class="block__title">Описание</h5>
                <span class="block__subtitle">Цена</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
            <div class="product__lot">
                <h5 class="product__name">Создание Оформления для Discord проекта</h5>
                <span class="product__price">100 RUB</span>
            </div>
        </div>
    </div>
</section>
@endsection
