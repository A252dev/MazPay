@extends('layouts.layout')

@section('title')MazPay - list @endsection

@section('main_content')
    <section class="list__wrapper">
        <div class="list__container">
            <div class="buttons__container">
                <a class="product__button list" href="#">Discord предложение</a>
                <a class="product__button up" href="#">Поднять предложения</a>
                <a class="product__button add" href="#">Добавить предложения</a>
            </div>
            <table>
                <tr>
                    <th>Описание</th>
                    <th>Наличие</th>
                    <th>Цена</th>
                </tr>
                <tr>
                    <td>Полное оформление Discord сервера</td>
                    <td>999</td>
                    <td>1500 RUB</td>
                </tr>
                <tr>
                    <td>Полное оформление Discord сервера</td>
                    <td>999</td>
                    <td>1500 RUB</td>
                </tr>
                <tr>
                    <td>Полное оформление Discord сервера</td>
                    <td>999</td>
                    <td>1500 RUB</td>
                </tr>
                <tr>
                    <td>Полное оформление Discord сервера</td>
                    <td>999</td>
                    <td>1500 RUB</td>
                </tr>
                <tr>
                    <td>Полное оформление Discord сервера</td>
                    <td>999</td>
                    <td>1500 RUB</td>
                </tr>
            </table>
        </div>
    </section>
@endsection
