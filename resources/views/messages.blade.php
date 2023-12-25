@extends('layouts.layout')

@section('title')MazPay - messages @endsection

@section('main_content')
<section class="messages__container">
    <div class="title__block">
        <h5 class="title">Сообщения</h5>
        <div class="title__info__block">
            <p class="line__text">Текущий заказ:</p><span class="line__value">#000001</span>
            <p class="line__text">Статус:</p><span class="line__value">В работе</span>
            <p class="line__text">Текущий заказ:</p><span class="line__value">10:00, 31.11.2023</span>
        </div>
    </div>
    <div class="description__block">
        <div class="users__block">
            <div class="current__user" id="selected">
                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54" fill="none">
                    <circle cx="27" cy="27" r="27" fill="white"/>
                </svg>
                <div class="user__info">
                    <h5 class="title">Agent <span class="time">10:00</span></h5>
                    <p class="subtitle">Привет, можно заказать сайт?</p>
                </div>
            </div>
            <div class="current__user">
                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54" fill="none">
                    <circle cx="27" cy="27" r="27" fill="white"/>
                </svg>
                <div class="user__info">
                    <h5 class="title">Agent</h5>
                    <p class="subtitle">Привет, можно заказать сайт?</p>
                </div>
            </div>
        </div>
        <div class="message__block">
            <div class="user__info">
                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="30" viewBox="0 0 33 30" fill="none">
                    <ellipse cx="16.5339" cy="15" rx="15.8839" ry="15" fill="#D9D9D9"/>
                </svg>
                <h5 class="title">Agent</h5>
                <div class="user__data">
                    <h5 class="register__data">ДАТА РЕГИСТРАЦИИ</h5>
                    <p class="register__data__value">31 сентября 2024, 23:59</p>
                </div>
            </div>
            <div class="content__block">
                <div class="left">
                    <div class="current__message">
                        <h5 class="title">Client</h5>
                        <p class="message">Привет, можно заказать сайт?</p>
                    </div>
                </div>
                <div class="right">
                    <div class="current__message">
                        <h5 class="title">Agent</h5>
                        <p class="message own">Привет лох ебаный, а сам сделать не можешь? Уже на столько обленился, пидарас ебаный, рыбка ебучая, хуй тебе, а не сайт, понял?</p>
                    </div>
                </div>
            </div>
            <div class="send__message__block">
                <input class="message__input" type="text" placeholder="Написать...">
                <div class="action__buttons">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                        <path d="M17.8105 11V4C17.8105 2.34315 16.3994 1 14.6585 1H9.40525M17.8105 11L10.9812 17M17.8105 11H13.0826C11.922 11 10.9812 11.8954 10.9812 13V17M10.9812 17H4.15197C2.41119 17 1 15.6569 1 14V9" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.23279 1V4.07692M4.23279 4.07692V7.15385M4.23279 4.07692H1M4.23279 4.07692H7.46558" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                        <path d="M2.40301 1.1096L16.4624 8.83536C17.0291 9.14681 17.0291 9.92562 16.4624 10.2371L2.40301 17.9628C1.83626 18.2743 1.12756 17.8849 1.12756 17.262V1.81047C1.12756 1.18756 1.8359 0.798149 2.40301 1.1096Z" fill="white"/>
                        <path d="M2.40301 1.1096L16.4624 8.83536C17.0291 9.14681 17.0291 9.92562 16.4624 10.2371L2.40301 17.9628C1.83626 18.2743 1.12756 17.8849 1.12756 17.262V1.81047C1.12756 1.18756 1.8359 0.798149 2.40301 1.1096Z" stroke="white" stroke-miterlimit="10"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="info__block">
            <a class="info__link" href="#">Правила</a>
            <a class="info__link" href="#">Поддержка</a>
            <a class="info__link" href="#">Контакты</a>
        </div>
    </div>
</section>
@endsection
