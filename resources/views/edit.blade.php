@extends('layouts.layout')

@section('title')MazPay - edit @endsection

@section('main_content')
    <section class="edit__wrapper">
        <div class="edit__container">
            <a class="add__product__button" href="#">Добавить предложение</a>
            <form action="#" method="POST">
                <h5 class="container__title">Предложения</h5>
                <select class="select__type" name="type" id="type">
                    <option class="type__value" value="design">Дизайн</option>
                    <option class="type__value" value="promotion">Накрутка</option>
                    <option class="type__value" value="setup">Настройка сервера</option>
                    <option class="type__value" value="boost">Nitro</option>
                    <option class="type__value" value="other">Прочее</option>
                </select>
                <div class="description__container">
                    <h5 class="container__title">Краткое описание</h5>
                    <input class="small__description" autocomplete="off">
                    <h5 class="container__title">Детальное описание</h5>
                    <textarea class="big__description" autocomplete="off"></textarea>
                    <h5 class="container__title">Запрещены ссылки на неофициальные источники</h5>
                </div>
                <div class="values__container">
                    <h5 class="container__title">Цена</h5>
                    <input class="edit__input" type="number" autocomplete="off">
                    <h5 class="container__title">Кол-во</h5>
                    <input class="edit__input" type="number" autocomplete="off">
                    <section class="checkbox__container"><input class="checkbox" type="checkbox" name="checkbox"><span class="container__title">Активное</span></section>
                </div>
                <button type="submit" class="save__button">Сохранить</button>
            </form>
        </div>
    </section>
@endsection
