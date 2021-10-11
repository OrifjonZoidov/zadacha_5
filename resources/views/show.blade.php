@extends('layouts.header')

@section('show')
    <h1 align="center"></h1>
    <div class="alert alert-info">
        <h3>{{'ISBN: '. $book['isbn'] }}</h3>
        <h5>{{ 'Имя книгы: '.$book['title']}}</h5>
        <p>{{ 'Год публикации '.$book['year_of_publication']}}</p>
        <p>{{ 'Год публикации '.$book['publisher']}}</p>
        <h6>{{ 'Цена '.$book['price']}}</h6>
        <a href="{{route('home')}}"><button class="btn btn-outline-danger">Назад</button></a>
        <a href="{{route('checkout')}}"><button class="btn btn-warning">Оформить заказ</button></a>
    </div>
@endsection
