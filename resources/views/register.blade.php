@extends('layouts.layout')

@section('title')MazPay - register @endsection

@section('main_content')
    @if (!empty($error))
        <p>{{ $error }}</p>
    @endif
    <section class="form__wrapper">
        <section class="form__container">
            <h2 class="form__title">Регистрация</h2>
            <form class="user__form" action="./register" method="POST">
                @csrf
                <input class="user__input" type="email" name="email" placeholder="Введите почту" autocomplete="off">
                <input class="user__input" type="text" name="nickname" placeholder="Введите ник" autocomplete="off">
                <input class="user__input" type="password" name="password" placeholder="Введите пароль">
                <input class="user__input" type="password" name="repeat_password" placeholder="Повторите пароль">
                <div class="rules__container">
                    <span class="rules__text"><input class="user__checkbox" type="checkbox" name="accept_rules">Соглашаюсь с правилами и политикой конфиденциальности</span>
                </div>
                <button class="user__button" type="submit">Зарегистрироваться</button>
            </form>
        </section>
    </section>
@endsection
