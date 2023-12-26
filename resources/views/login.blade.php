@extends('layouts.layout')

@section('title')MazPay - login @endsection

@section('main_content')
    <section class="form__wrapper">

        <section class="form__container">
            <h2 class="form__title">Авторизация</h2>
            <form class="user__form" action="./login" method="POST">
                @if (!empty($error))
                    <p>{{ $error }}</p>
                @endif
                @csrf
                <input class="user__input" type="email" name="email" placeholder="Введите почту" autocomplete="off">
                <input class="user__input" type="password" name="password" placeholder="Введите пароль">
                <button class="user__button" type="submit">Авторизироваться</button>
            </form>
        </section>
    </section>
@endsection
