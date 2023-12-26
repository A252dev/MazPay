@extends('layouts.layout')

@section('title')MazPay - sales @endsection

@section('main_content')
    <section class="table__wrapper">
        <h4 class="header__title">Мои продажи</h4>
        <div class="table__container">
            <table class="table">
                <tr>
                    <th>№ Заказа</th>
                    <th>Описание</th>
                    <th>Покупатель</th>
                    <th>Дата</th>
                    <th>Статус</th>
                    <th>Сумма</th>
                </tr>
                <tr>
                    <td>#A00001</td>
                    <td>СДЕЛАЮ ПРЕВЬЮ ДЛЯ ВАШЕГО РОЛИКА</td>
                    <td><div class="user__container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <circle cx="15" cy="15" r="15" fill="#D9D9D9"/>
                            </svg>
                            <section class="user__info">
                                <h5 class="title">Ivan</h5>
                                <p class="online__status">был 5 минут назад</p>
                            </section>
                        </div>
                    </td>
                    <td>8:16
                        20.12.2023</td>
                    <td><span class="paid">Оплачен</span></td>
                    <td>1000 RUB</td>
                </tr>
                <tr>
                    <td>#A00001</td>
                    <td>СДЕЛАЮ ПРЕВЬЮ ДЛЯ ВАШЕГО РОЛИКА</td>
                    <td><div class="user__container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <circle cx="15" cy="15" r="15" fill="#D9D9D9"/>
                            </svg>
                            <section class="user__info">
                                <h5 class="title">Ivan</h5>
                                <p class="online__status">был 5 минут назад</p>
                            </section>
                        </div>
                    </td>
                    <td>8:16
                        20.12.2023</td>
                    <td><span class="return">Возврат</span></td>
                    <td>1000 RUB</td>
                </tr>
                <tr>
                    <td>#A00001</td>
                    <td>СДЕЛАЮ ПРЕВЬЮ ДЛЯ ВАШЕГО РОЛИКА</td>
                    <td>
                        <div class="user__container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <circle cx="15" cy="15" r="15" fill="#D9D9D9"/>
                            </svg>
                            <section class="user__info">
                                <h5 class="title">Ivan</h5>
                                <p class="online__status">был 5 минут назад</p>
                            </section>
                        </div>
                    </td>
                    <td>8:16
                        20.12.2023</td>
                    <td><span class="closed">Закрыт</span></td>
                    <td>1000 RUB</td>
                </tr>
            </table>
        </div>
    </section>
@endsection
