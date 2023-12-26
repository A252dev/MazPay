@extends('layouts.layout')

@section('title') MazPay - section add @endsection

@section('main_content')
    <form action="./add_confirm" method="POST">
        @csrf
        <input name="product" placeholder="product">
        <select name="category" id="category">
            <option value="design">design</option>
            <option value="accounts">accounts</option>
            <option value="boost">boost</option>
            <option value="setup">setup</option>
            <option value="other">other</option>
        </select>
        <input name="small_description" placeholder="small_description">
        <input name="big_description" placeholder="big_description">
        <input type="number" name="price" placeholder="price">
        <input type="number" name="in_stock" placeholder="in_stock">
        <input type="checkbox" name="status">status (active or inactive)
        <button type="submit">add product</button>
    </form>
@endsection
