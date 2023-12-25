@extends('layouts.layout')

@section('title') MazPay - settings @endsection

@section('main_content')
    <form action="./settings" method="POST" enctype="multipart/form-data">
        @csrf
        <input name="email" type="email" value="{{ $user->email }}">
        <input name="password" type="password" placeholder="new pass">
        <input name="avatar" type="file">
        <button type="submit">Update</button>
    </form>
@endsection
